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
    <?php include '../../controllers/student-dashboard-controller.php'; ?>

    <div class="container-fluid">
        <!-- Stats Cards -->
        <div class="row">


            <div class="col-md-3">
                <div class="card stat-card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $active_exams; ?></div>
                                <div class="card-title text-white">Active Exams</div>
                            </div>
                            <i class="fas fa-clipboard-list card-icon"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card stat-card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $submissions_today; ?></div>
                                <div class="card-title text-white">My Submissions</div>
                            </div>
                            <i class="fas fa-file-upload card-icon"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card stat-card bg-warning text-dark">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $pending_grading; ?></div>
                                <div class="card-title text-dark">My Pending Grading</div>
                            </div>
                            <i class="fas fa-check-double card-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Exam Performance Overview</h5>
                    </div>
                    <div class="card-body">
                        <!-- Replace with actual exam performance chart>
                        <div style="height: 300px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                            <p class="text-muted">Exam Performance Chart Would Appear Here</p>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between">
                                <span>Average Score: 78%</span>
                                <span>Pass Rate: 85%</span>
                                <span>Top Score: 98%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">System Alerts</h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($activities as $activity): ?>
                            <div class="activity-item">
                                <div class="d-flex justify-content-between">
                                    <strong><?php echo $activity['type']; ?></strong>
                                    <span class="activity-time"><?php echo $activity['time']; ?></span>
                                </div>
                                <p class="mb-0 text-muted"><?php echo $activity['details']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </!--div -->

        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Exam Submissions</h5>
                        <!--a href="teacher-exam-submission.php" class="btn btn-sm btn-outline-primary">View All</!--a-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Exam</th>
                                        <th>Submission Time</th>
                                        <th>Status</th>
                                        <th>Score</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($recent_submissions as $submission):
                                        $student = getRecord('users', "user_id = {$submission['student_id']}");
                                        $quiz = getRecord('quizzes', "quiz_id = {$submission['quiz_id']}");
                                        $question = getAllRecords('questions', "WHERE quiz_id = {$submission['quiz_id']}");
                                        $student_answers = getAllRecords('student_answers', "WHERE quiz_id = {$submission['quiz_id']} AND student_id = {$submission['student_id']}");
                                        $student_grade = 0;
                                        foreach ($student_answers as $answer) {
                                            $student_grade += $answer['points_earned'];
                                        }
                                        $total_points = 0;
                                        foreach ($question as $q) {
                                            $total_points += $q['points'];
                                        }
                                        $status_class = $submission['is_graded'] ? 'bg-success' : 'bg-warning text-dark';
                                        $status_text = $submission['is_graded'] ? 'Graded' : 'Pending';
                                    ?>
                                        <tr>
                                            <td>#<?php echo $submission['student_id']; ?></td>
                                            <td><?php echo "{$student['first_name']} {$student['last_name']}"; ?></td>
                                            <td><?php echo $quiz['title']; ?></td>
                                            <td><?php echo date('F j, Y H:i', strtotime($submission['taken_at'])); ?></td>
                                            <td><span class="badge <?php echo $status_class; ?>"><?php echo $status_text; ?></span></td>
                                            <td><?php echo intval($student_grade); ?> / <?php echo intval($total_points); ?></td>
                                            <td>
                                                <a href="student-review-exam.php?student_id=<?php echo $submission['student_id']; ?>&id=<?php echo $submission['quiz_id']; ?>" class="btn btn-sm btn-outline-primary">Review</a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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