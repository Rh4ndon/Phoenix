<nav class="top-navbar d-flex justify-content-between align-items-center">
    <button class="btn btn-sm btn-outline-secondary toggle-sidebar-btn" id="openSidebar">
        <i class="fas fa-bars"></i>
    </button>

    <?php
    $pageName = basename($_SERVER['PHP_SELF'], '.php');
    $formattedPageName = ucwords(str_replace('-', ' ', $pageName));
    if ($pageName == 'teacher-student-list') {
        $formattedPageName = "Teacher's Student List";
    }
    ?>
    <h4 class="mb-0 page-name">
        <?php echo $formattedPageName; ?>
    </h4>

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
                <!--img src="https://via.placeholder.com/40" alt="User" class="user-profile"-->
                <span><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <!--li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></!--li-->
                <li><a class="dropdown-item" href="settings.php"><i class="fas fa-cog me-2"></i> Settings</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../../controllers/logout.php"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>