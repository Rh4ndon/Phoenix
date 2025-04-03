<!-- Header -->
<?php include 'header.php'; ?>

<!-- Session Check -->
<?php include '../../controllers/sessions.php'; ?>

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Top Navbar -->
    <?php include 'top-navbar.php'; ?>

    <!-- Dashboard Content -->
    <div class="container-fluid">




        <!-- Exams Table -->
        <div class="row mt-4">

            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Edit Question <i class="fas fa-pencil-alt"></i></h5>
                    </div>
                    <div class="card-body">
                        <?php include '../../controllers/get-edit-question.php'; ?>

                    </div>
                </div>
            </div>


        </div>


    </div>
</div>


<!-- Footer -->
<?php include 'footer.php'; ?>