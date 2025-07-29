<?php
require_once("includes/header.php");
require_once("includes/sidebar.php");
?>

<main style="margin-top: 58px">
    <div class="container py-4">

        <!-- ✅ Breadcrumb -->
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="users.php">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add User</li>
            </ol>
        </nav>

        <!-- ✅ Card Form -->
        <div class="card shadow-3">
            <div class="card-header">
                <h5 class="mb-0">Add New User</h5>
            </div>
            <div class="card-body">
                <form method="POST" id="add-user">

                    <!-- Name -->
                    <div class="mb-4">
                        <label class="form-label" for="name">Full Name: <span id="nameErr"></span> </label>
                        <input type="text" id="name" name="name" class="form-control" />
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="form-label" for="email">Email: <span id="emailErr"></span> </label>
                        <input type="email" id="email" name="email" class="form-control" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label class="form-label" for="password">Password: <span id="passwordErr"></span> </label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control" />
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="mb-4">
                        <label class="form-label" for="role">Role: <span id="roleErr"></span> </label>
                        <select name="role" id="role" class="form-select">
                            <option value="" disabled selected>Select Role</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Save User
                    </button>
                    <a href="users.php" class="btn btn-secondary ms-2">Cancel</a>

                </form>
            </div>
        </div>
    </div>
</main>

<!-- ✅ JS to toggle password visibility -->
<script>
    document.getElementById("togglePassword").addEventListener("click", function() {
        const passwordInput = document.getElementById("password");
        const icon = this.querySelector("i");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    });
</script>

<?php
require_once("includes/footer.php");
?>