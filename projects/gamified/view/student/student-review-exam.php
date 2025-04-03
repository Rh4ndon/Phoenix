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



            <div class="col-md-12">
                <div class="card">


                    <?php include '../../controllers/get-review-answer.php'; ?>



                </div>
            </div>
        </div>


    </div>
</div>


<!-- Footer -->
<?php include 'footer.php'; ?>