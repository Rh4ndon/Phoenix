<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../models/functions.php';
try {
    $records = getAllRecords('quizzes', 'ORDER BY created_at DESC');
    if (!empty($records)) {
        foreach ($records as $exams) {
            $exams['created_at'] = date('F j, Y', strtotime($exams['created_at']));
            $answers = getAllRecords('student_answers', 'WHERE quiz_id = ' . $exams['quiz_id'] . ' AND student_id = ' . $_SESSION['user_id']);
?>
            <div class="col-md-2 mb-4">
                <div class="card">
                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><?php echo $exams['title']; ?> <i class="fas fa-paperclip"></i></h5>
                    </div>
                    <div class="card-body">
                        Subject: <?php echo $exams['subject']; ?>
                        <br>
                        Description: <?php echo $exams['description']; ?>
                        <br>
                        <?php
                        if (!empty($answers) && $answers[0]['is_graded'] == 0) {
                            echo '<span class="btn btn-secondary mt-2">Pending for grading</span>';
                        } elseif (!empty($answers) && $answers[0]['is_graded'] == 1) {
                            $totalPoints = 0;
                            foreach ($answers as $answer) {
                                $totalPoints += $answer['points_earned'];
                            }
                            echo '<span class="btn btn-success mt-2">Total Points: ' . $totalPoints . '</span>';
                        } else { ?>

                            <a href="student-take-exam.php?id=<?php echo $exams['quiz_id']; ?>" class="btn btn-primary mt-2">Take Exam</a>

                        <?php    } ?>

                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo '<div class="col-12"><div class="alert alert-warning text-center">No records found</div></div>';
    }
} catch (Exception $e) {
    echo '<div class="col-12"><div class="alert alert-danger text-center">Error: ' . $e->getMessage() . '</div></div>';
}
?>