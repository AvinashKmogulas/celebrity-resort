$(document).ready(function () {
  $("#add-user").on("submit", function (e) {
    e.preventDefault();
    let name = $("#name").val();
    let email = $("#email").val();
    let password = $("#password").val();
    let role = $("#role").val();

    let nameRex = /^[a-zA-Z\s.]{2,50}$/;
    let emailRex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    let isValid = true;

    // Name Validation
    if (!nameRex.test(name)) {
      $("#name").addClass("is-invalid");
      $("#nameErr").text("Enter a valid name (letters, dot, space allowed)");
      isValid = false;
    } else {
      $("#name").removeClass("is-invalid");
      $("#nameErr").text("");
    }

    // Email Validation
    if (!emailRex.test(email)) {
      $("#email").addClass("is-invalid");
      $("#emailErr").text("Enter a valid email address");
      isValid = false;
    } else {
      $("#email").removeClass("is-invalid");
      $("#emailErr").text("");
    }

    if (password.length > 4) {
      $("#password").addClass("is-invalid");
      $("#passwordErr").text("Password must be at least 5 characters");
      isValid = false;
    } else {
      $("#password").removeClass("is-invalid");
      $("#passwordErr").text("");
    }

    if (!role) {
      $("#role").addClass("is-invalid");
      $("#roleErr").text("Please select a role");
      isValid = false;
    } else {
      $("#role").removeClass("is-invalid");
      $("#roleErr").text("");
    }

    // Submit form if all valid
    if (isValid) {
      $.ajax({
        url: "code/register-proccess.php",
        method: "POST",
        data: {
          name: name,
          email: email,
          password: password,
          role: role,
        },
        success: function (response) {
          if (response == "success") {
            $("#add-user")[0].reset();
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title: "User added successfully!",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didClose: () => {
                window.location.href = "users.php";
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
          url: "code/update-status.php",
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
          url: "code/update-status.php",
          method: "POST",
          data: {
            id: userId,
            action: "delete_user",
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

  // //   edit user

  // $(document).on("click", ".edit-user", function () {
  //   const id = this.getAttribute("data-id");
  //   Swal.fire({
  //     title: "Redirecting...",
  //     text: "Please wait while we load the user details.",
  //     icon: "info",
  //     showConfirmButton: false,
  //     allowOutsideClick: false,
  //     timer: 3000,
  //     didOpen: () => {
  //       Swal.showLoading();
  //     },
  //   });
  //   setTimeout(() => {
  //     window.location.href = `add-user.php?edit=${id}`;
  //   }, 1500);
  // });
});
