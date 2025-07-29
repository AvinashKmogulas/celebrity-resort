$(document).ready(function () {
  $("#departmentForm").on("submit", function (e) {
    e.preventDefault();
    let department = $("#departmentName").val();
    let id = $("#departmentId").val();

    let isValid = true;
    // Name Validation
    if (department == "") {
      $("#departmentName").addClass("is-invalid");
      $("#depErr").text("Enter a depatment name");
      isValid = false;
    } else {
      $("#departmentName").removeClass("is-invalid");
      $("#depErr").text("");
    }

    if (isValid) {
      $.ajax({
        url: "code/department-code.php",
        method: "POST",
        data: {
          id: id,
          department: department,
        },
        success: function (response) {
          if (response == "success") {
            $("#departmentForm")[0].reset();
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title: "Department created successfully!",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didClose: () => {
                window.location.href = "department.php";
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

  //delete department
  $(document).on("click", ".deleteDepartment", function (e) {
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
          url: "code/department-code.php",
          method: "POST",
          data: {
            deleteDepartment: true,
            id: depId,
          },
          success: function (response) {
            if (response == "success") {
              Swal.fire({
                toast: true,
                position: "top-end",
                icon: "success",
                title: "Department deleted successfully!",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didClose: () => {
                  window.location.href = "department.php";
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
  $(document).on("click", ".editDepartment", function (e) {
    e.preventDefault();
    const depId = $(this).data("id");
    const depName = $(this).data("name");

    $("#departmentId").val(depId);
    $("#departmentName").val(depName);

    $("#departmentModal").fadeIn();
  });
});
