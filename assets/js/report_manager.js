$(document).ready(function () {
  $("#reportManagerForm").on("submit", function (e) {
    e.preventDefault();
    let reportManagerName = $("#managerName").val();
    let id = $("#managerId").val();
    console.log(reportManagerName);
    console.log(id);

    let isValid = true;
    // Name Validation
    if (reportManagerName == "") {
      $("#managerName").addClass("is-invalid");
      $("#rmErr").text("Enter a depatment name");
      isValid = false;
    } else {
      $("#managerName").removeClass("is-invalid");
      $("#rmErr").text("");
    }

    if (isValid) {
      $.ajax({
        url: "code/report-manager-code.php",
        method: "POST",
        data: {
          id: id,
          rmName: reportManagerName,
        },
        success: function (response) {
          if (response == "success") {
            $("#reportManagerForm")[0].reset();
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title: "Report Manager created successfully!",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didClose: () => {
                window.location.href = "report-manager.php";
              },
            });
          } else {
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "error",
              title: response.message,
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
            });
          }
        },
      });
    }
  });

  //delete department
  $(document).on("click", ".deleteReport", function (e) {
    e.preventDefault();
    // let id = $(this).attr("id");
    const depId = $(this).data("id");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "code/report-manager-code.php",
          method: "POST",
          data: {
            deleteReport: true,
            id: depId,
          },
          success: function (response) {
            if (response == "success") {
              Swal.fire({
                toast: true,
                position: "top-end",
                icon: "success",
                title: "Remort Manager deleted successfully!",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didClose: () => {
                  window.location.href = "report-manager.php";
                },
              });
            } else {
              Swal.fire({
                toast: true,
                position: "top-end",
                icon: "error",
                title: response,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
              });
            }
          },
        });
      }
    });
  });

  //   edit
  $(document).on("click", ".editReport", function (e) {
    e.preventDefault();
    const depId = $(this).data("id");
    const depName = $(this).data("name");

    $("#managerId").val(depId);
    $("#managerName").val(depName);

    $("#reportModal").fadeIn();
  });
});
