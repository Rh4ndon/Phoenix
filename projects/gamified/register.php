<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamified Learning</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header i {
            font-size: 50px;
            color: #0d6efd;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            font-weight: 600;
        }

        .additional-links {
            text-align: center;
            margin-top: 20px;
        }

        .additional-links a {
            color: #6c757d;
            text-decoration: none;
        }

        .additional-links a:hover {
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="login-header">
                <i class="fas fa-user-circle"></i>
                <h2>Welcome!</h2>
                <p class="text-muted">Please enter your credentials to register</p>
            </div>

            <form action="controllers/register.php" method="POST">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your First_name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last_name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>


                <button type="submit" name="register" class="btn btn-primary btn-login mb-3">Submit</button>
            </form>
            <div class="additional-links">
                <p>Already have an account?</p>
            </div>
            <a href="index.php"><button type="button" class="btn btn-primary btn-login mb-3">Login</button></a>


        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show alert
        function showAlert(message, type = 'success') {
            // Remove existing alert if any
            let existingAlert = document.querySelector('.floating-alert');
            if (existingAlert) {
                existingAlert.remove();
            }

            // Create the alert element
            let alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show floating-alert`;
            alertDiv.setAttribute('role', 'alert');
            alertDiv.innerHTML = `
            <strong>${type === 'success' ? 'Success!' : type === 'warning' ? 'Warning!' : 'Error!'}</strong> ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

            // Apply floating styles
            alertDiv.style.position = 'fixed';
            alertDiv.style.top = '20px';
            alertDiv.style.right = '20px';
            alertDiv.style.zIndex = '1050';

            // Append to body
            document.body.appendChild(alertDiv);

            // Auto remove after 5 seconds
            setTimeout(() => {
                alertDiv.classList.remove('show');
                setTimeout(() => alertDiv.remove(), 300);
            }, 7000);
        }

        // Remove ?msg or ?error from URL
        if (window.location.search) {
            window.history.replaceState({}, document.title, window.location.pathname);
        }


        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const icon = this.querySelector('i');
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
    <?php
    if (isset($_GET['msg'])) {
        echo "<script>showAlert('{$_GET['msg']}')</script>";
    }
    if (isset($_GET['error'])) {
        echo "<script>showAlert('{$_GET['error']}', 'danger')</script>";
    }
    if (isset($_GET['warning'])) {
        echo "<script>showAlert('{$_GET['warning']}', 'warning')</script>";
    }
    ?>
</body>

</html>