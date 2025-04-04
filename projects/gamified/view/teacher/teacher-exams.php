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
                        <h5 class="mb-0">Create Exam/Quiz <i class="fas fa-pencil-alt"></i></h5>
                    </div>
                    <div class="card-body">
                        <form action="../../controllers/create-exam.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter Subject" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="time">Time</label>
                                <input type="number" name="time" class="form-control" placeholder="Enter time in minutes" min="1" max="120" required>
                            </div>


                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter Description" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <input type="submit" name="create-exam" class="btn btn-primary" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Exams/Quiz <i class="fas fa-folder"></i></h5>
                        <!--a href="#" class="btn btn-sm btn-outline-primary">View All</!--a-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Subject</th>
                                        <th>Description</th>
                                        <th>Time</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    include '../../controllers/get-exam.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<!-- Footer -->
<?php include 'footer.php'; ?>