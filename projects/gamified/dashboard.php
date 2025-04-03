<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Student Panel</h5>
            <button class="btn btn-sm btn-light toggle-sidebar-btn" id="closeSidebar" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="sidebar-menu">
            <a href="#" class="active">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="#">
                <i class="fas fa-users"></i> Users
            </a>
            <a href="#">
                <i class="fas fa-box"></i> Products
            </a>
            <a href="#">
                <i class="fas fa-shopping-cart"></i> Orders
            </a>
            <a href="#">
                <i class="fas fa-chart-line"></i> Analytics
            </a>
            <a href="#">
                <i class="fas fa-cog"></i> Settings
            </a>
            <a href="#">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="top-navbar d-flex justify-content-between align-items-center">
            <button class="btn btn-sm btn-outline-secondary toggle-sidebar-btn" id="openSidebar">
                <i class="fas fa-bars"></i>
            </button>

            <h4 class="mb-0 page-name">Student Dashboard</h4>

            <div class="d-flex align-items-center">
                <!--div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="notificationsDropdown" data-bs-toggle="dropdown">
                        <i class="fas fa-bell"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <h6 class="dropdown-header">Notifications</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">New order received</a></li>
                        <li><a class="dropdown-item" href="#">System update available</a></li>
                        <li><a class="dropdown-item" href="#">New user registered</a></li>
                    </ul>
                </!--div-->

                <div class="dropdown ms-3">
                    <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown">
                        <img src="https://via.placeholder.com/40" alt="User" class="user-profile">
                        <span>John Doe</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="container-fluid">
            <!-- Stats Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card stat-card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="card-value">1,254</div>
                                    <div class="card-title">Total Users</div>
                                </div>
                                <i class="fas fa-users card-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="card-value">$12,345</div>
                                    <div class="card-title">Total Revenue</div>
                                </div>
                                <i class="fas fa-dollar-sign card-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="card-value">356</div>
                                    <div class="card-title">New Orders</div>
                                </div>
                                <i class="fas fa-shopping-cart card-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card bg-warning text-dark">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="card-value">24</div>
                                    <div class="card-title">Pending Tasks</div>
                                </div>
                                <i class="fas fa-tasks card-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Row -->
            <div class="row mt-4">
                <!-- Chart Column -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Sales Overview</h5>
                        </div>
                        <div class="card-body">
                            <!-- Placeholder for chart - you would replace this with your actual chart -->
                            <div style="height: 300px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                                <p class="text-muted">Sales Chart Would Appear Here</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Column -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Recent Activity</h5>
                        </div>
                        <div class="card-body">
                            <div class="activity-item">
                                <div class="d-flex justify-content-between">
                                    <strong>New order received</strong>
                                    <span class="activity-time">2 min ago</span>
                                </div>
                                <p class="mb-0 text-muted">Order #12345 for $125.00</p>
                            </div>

                            <div class="activity-item">
                                <div class="d-flex justify-content-between">
                                    <strong>User registered</strong>
                                    <span class="activity-time">15 min ago</span>
                                </div>
                                <p class="mb-0 text-muted">Jane Smith signed up</p>
                            </div>

                            <div class="activity-item">
                                <div class="d-flex justify-content-between">
                                    <strong>System update</strong>
                                    <span class="activity-time">1 hour ago</span>
                                </div>
                                <p class="mb-0 text-muted">Version 2.1 installed</p>
                            </div>

                            <div class="activity-item">
                                <div class="d-flex justify-content-between">
                                    <strong>Payment processed</strong>
                                    <span class="activity-time">3 hours ago</span>
                                </div>
                                <p class="mb-0 text-muted">Payment for invoice #54321</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Table -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Recent Orders</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#12345</td>
                                            <td>John Smith</td>
                                            <td>2023-06-15</td>
                                            <td>$125.00</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>#12344</td>
                                            <td>Jane Doe</td>
                                            <td>2023-06-14</td>
                                            <td>$89.00</td>
                                            <td><span class="badge bg-warning text-dark">Processing</span></td>
                                            <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>#12343</td>
                                            <td>Robert Johnson</td>
                                            <td>2023-06-14</td>
                                            <td>$245.50</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>#12342</td>
                                            <td>Emily Davis</td>
                                            <td>2023-06-13</td>
                                            <td>$67.30</td>
                                            <td><span class="badge bg-danger">Cancelled</span></td>
                                            <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openSidebarBtn = document.getElementById('openSidebar');
            const closeSidebarBtn = document.getElementById('closeSidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');
            const sidebar = document.getElementById('sidebar');

            function toggleSidebar() {
                sidebar.classList.toggle('active');
                sidebarOverlay.classList.toggle('active');

                // Prevent scrolling when sidebar is open
                if (sidebar.classList.contains('active')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            }

            // Open sidebar
            openSidebarBtn.addEventListener('click', toggleSidebar);

            // Close sidebar
            closeSidebarBtn.addEventListener('click', toggleSidebar);

            // Close when clicking overlay
            sidebarOverlay.addEventListener('click', toggleSidebar);

            // Close when clicking a menu item (optional)
            const menuItems = document.querySelectorAll('.sidebar-menu a');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        toggleSidebar();
                    }
                });
            });

            // Close sidebar when window is resized to desktop size
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    sidebar.classList.remove('active');
                    sidebarOverlay.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });
    </script>
</body>

</html>