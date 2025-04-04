    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">PEQuest <br>Student Panel</h5>
            <button class="btn btn-sm btn-light toggle-sidebar-btn" id="closeSidebar" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="sidebar-menu">
            <a href="student-dashboard.php" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['student-dashboard.php', 'student-review-exam.php']) ? 'active' : ''; ?>">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <!--a href="student-performance.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'student-performance.php' ? 'active' : ''; ?>">
                <i class="fas fa-chart-line"></i> Performance
            </!--a-->
            <a href="student-exams.php" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['student-exams.php', 'student-take-exam.php']) ? 'active' : ''; ?>">
                <i class="fas fa-box"></i> Exams
            </a>
            <a href="../../controllers/logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>