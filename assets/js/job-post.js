$(document).ready(function () {
  $("#create-job").on("submit", function (e) {
    e.preventDefault();
    let id = $("#jobid").val();
    let title = $("#title").val().trim();
    let department = $("#department").val();
    let reportTo = $("#report").val();
    let description = tinymce.get("job-d").getContent().trim();

    let isValid = true;
    // Name Validation
    if (title == "") {
      $("#title").addClass("is-invalid");
      $("#titleErr").text("Enter a job title");
      isValid = false;
    } else {
      $("#title").removeClass("is-invalid");
      $("#titleErr").text("");
    }

    // Email Validation
    if (!department) {
      $("#department").addClass("is-invalid");
      $("#departErr").text("Select atleast one department");
      isValid = false;
    } else {
      $("#department").removeClass("is-invalid");
      $("#departErr").text("");
    }

    if (!reportTo) {
      $("#report").addClass("is-invalid");
      $("#reportErr").text("Select atleast one report");
      isValid = false;
    } else {
      $("#report").removeClass("is-invalid");
      $("#reportErr").text("");
    }

    if (description == "") {
      $("#job-d").addClass("is-invalid");
      $("#jdErr").text("Please write job description");
      isValid = false;
    } else {
      $("#job-d").removeClass("is-invalid");
      $("#jdErr").text("");
    }

    if (isValid) {
      $.ajax({
        url: "code/create-jobpost-proccess.php",
        method: "POST",
        data: {
          id: id,
          title: title,
          department: department,
          reportTo: reportTo,
          description: description,
        },
        success: function (response) {
          if (response == "success") {
            $("#create-job")[0].reset();
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title: "Job post created successfully!",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didClose: () => {
                window.location.href = "job-post.php";
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

  //   change status
  $(document).on("click", ".change-status", function () {
    const userId = $(this).data("id");
    const currentStatus = $(this).data("status");
    console.log(userId, currentStatus);
    const newStatus = currentStatus === 1 ? "deactivated" : "activated";

    Swal.fire({
      title: "Are you sure?",
      text: "Do you really want to change this user's status?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, change it!",
      cancelButtonText: "Cancel",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "code/update-job.php",
          method: "POST",
          data: {
            id: userId,
            current_status: currentStatus,
            action: "change_status",
          },
          success: function (response) {
            if (response === "success") {
              Swal.fire(
                "Updated!",
                "User status has been changed to " + newStatus,
                "success"
              ).then(() => {
                location.reload();
              });
            } else {
              Swal.fire("Error!", response, "error");
            }
          },
        });
      }
    });
  });

  //   delete user
  $(document).on("click", ".delete-user", function () {
    const userId = $(this).data("id");

    Swal.fire({
      title: "Are you sure?",
      text: "This action cannot be undone!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "Cancel",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "code/update-job.php",
          method: "POST",
          data: {
            id: userId,
            action: "delete_post",
          },
          success: function (response) {
            if (response === "success") {
              Swal.fire("Deleted!", "User has been deleted.", "success").then(
                () => {
                  location.reload();
                }
              );
            } else {
              Swal.fire("Error!", response, "error");
            }
          },
        });
      }
    });
  });

  //   edit job
  //   edit user

  $(document).on("click", ".edit-post", function () {
    const id = this.getAttribute("data-id");
    Swal.fire({
      title: "Redirecting...",
      text: "Please wait while we load the user details.",
      icon: "info",
      showConfirmButton: false,
      allowOutsideClick: false,
      timer: 3000,
      didOpen: () => {
        Swal.showLoading();
      },
    });
    setTimeout(() => {
      window.location.href = `create-job.php?id=${id}`;
    }, 1500);
  });
});
