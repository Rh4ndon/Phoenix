    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">PEQuest <br>Teacher's Panel</h5>
            <button class="btn btn-sm btn-light toggle-sidebar-btn" id="closeSidebar" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="sidebar-menu">
            <a href="teacher-dashboard.php" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['teacher-dashboard.php', 'teacher-exam-submission.php', 'teacher-check-exam.php']) ? 'active' : ''; ?>">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="teacher-student-list.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'teacher-student-list.php' ? 'active' : ''; ?>">
                <i class="fas fa-graduation-cap"></i>Student List
            </a>
            <a href="teacher-exams.php" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['teacher-exams.php', 'teacher-edit-exam.php', 'teacher-view-exam.php', 'teacher-edit-question.php', 'teacher-edit-question.php']) ? 'active' : ''; ?>">
                <i class="fas fa-box"></i> Exams
            </a>
            <a href="teacher-sections.php" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['teacher-sections.php']) ? 'active' : ''; ?>">
                <i class="fas fa-book"></i> Sections
            </a>
            <a href="../../controllers/logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>