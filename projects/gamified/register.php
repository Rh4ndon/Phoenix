<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #space-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header i {
            font-size: 50px;
            color: #0d6efd;
            margin-bottom: 15px;
            text-shadow: 0 0 10px rgba(13, 110, 253, 0.5);
        }

        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            background: linear-gradient(45deg, #0d6efd, #0b5ed7);
            border: none;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
        }

        .additional-links {
            text-align: center;
            margin-top: 20px;
        }

        .additional-links a {
            color: #6c757d;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .additional-links a:hover {
            color: #0d6efd;
            text-shadow: 0 0 5px rgba(13, 110, 253, 0.3);
        }

        /* Particle styles */
        .particle {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.6);
        }

        .shooting-star {
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.1),
                0 0 0 8px rgba(255, 255, 255, 0.1),
                0 0 20px rgba(255, 255, 255, 1);
            animation: shooting 3s linear infinite;
        }

        @keyframes shooting {
            0% {
                transform: translateX(0) translateY(0) rotate(45deg);
                opacity: 1;
            }

            70% {
                opacity: 1;
            }

            100% {
                transform: translateX(1000px) translateY(-1000px) rotate(45deg);
                opacity: 0;
            }
        }

        /* Floating alert animation */
        .floating-alert {
            animation: alertFadeIn 0.5s ease-out;
        }

        @keyframes alertFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<?php
session_start();
// Check if the user is logged in
if (isset($_SESSION['is_logged_in'])) {
    // User is logged in, do nothing
    if ($_SESSION['is_admin'] == 1) {
        header('Location: view/teacher/teacher-dashboard.php');
        exit();
    } else {
        header('Location: view/student/student-dashboard.php');
        exit();
    }
}
?>

<body>
    <!-- Space Background with Particles -->
    <div id="space-background"></div>



    <div class="container">
        <div class="login-container">
            <div class="login-header">
                <i class="fas fa-user-astronaut"></i>
                <h2>PEQuest</h2>
                <p class="text-muted">Register to continue your journey</p>
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
                    <label for="section" class="form-label">Section</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-book"></i></span>
                        <?php include 'controllers/get-section-register.php'; ?>
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
                <p>Old explorer?</p>
            </div>
            <a href="index.php"><button type="button" class="btn btn-outline-primary btn-login mb-3">Login</button></a>


        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Create space particles
        function createSpaceBackground() {
            const space = document.getElementById('space-background');
            const particleCount = 100;
            const shootingStarCount = 3;

            // Create stars
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';

                // Random size between 1 and 3px
                const size = Math.random() * 2 + 1;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;

                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;

                // Random opacity
                particle.style.opacity = Math.random();

                // Add twinkle animation
                particle.style.animation = `twinkle ${Math.random() * 5 + 3}s infinite alternate`;

                space.appendChild(particle);
            }

            // Create shooting stars
            for (let i = 0; i < shootingStarCount; i++) {
                createShootingStar();
                setInterval(createShootingStar, 3000);
            }
        }

        function createShootingStar() {
            const space = document.getElementById('space-background');
            const shootingStar = document.createElement('div');
            shootingStar.className = 'shooting-star';

            // Random start position on left or top edge
            if (Math.random() > 0.5) {
                shootingStar.style.left = '0px';
                shootingStar.style.top = `${Math.random() * 100}%`;
            } else {
                shootingStar.style.left = `${Math.random() * 100}%`;
                shootingStar.style.top = '0px';
            }

            // Random delay
            shootingStar.style.animationDelay = `${Math.random() * 2}s`;

            space.appendChild(shootingStar);

            // Remove after animation completes
            setTimeout(() => {
                shootingStar.remove();
            }, 3000);
        }

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

        // Initialize space background
        window.onload = function() {
            createSpaceBackground();
        };
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