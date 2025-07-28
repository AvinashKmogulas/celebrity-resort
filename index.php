<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>

    <!-- MDB Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background-color: #f8f9fa;
        }

        .center-wrapper {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .forgot-link {
            text-align: right;
        }

        label {
            margin-bottom: 6px;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="center-wrapper">
        <div class="login-box">
            <h4 class="text-center mb-4">Admin Login</h4>

            <form method="post" action="admin-login.php">
                <!-- Email -->
                <div class="mb-4">
                    <label for="email"><i class="fas fa-envelope me-2"></i>Email</label>
                    <input type="email" id="email" name="email" class="form-control" required />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
                    <input type="password" id="password" name="password" class="form-control" required />
                </div>

                <!-- Show Password -->
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="showPassword" />
                    <label class="form-check-label" for="showPassword">Show Password</label>
                </div>

                <!-- Forgot Password -->
                <div class="forgot-link mb-3">
                    <a href="forgot-password.php" class="text-primary">Forgot Password?</a>
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
            </form>
        </div>
    </div>

    <!-- MDB Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.js"></script>

    <!-- Show Password Script -->
    <script>
        document.getElementById("showPassword").addEventListener("change", function() {
            const pwd = document.getElementById("password");
            pwd.type = this.checked ? "text" : "password";
        });
    </script>
</body>

</html>