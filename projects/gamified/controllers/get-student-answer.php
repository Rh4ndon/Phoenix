<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../models/functions.php';

if (!isset($_GET['id'])) {
    echo '<script>window.location.href="teacher-exams.php";</script>';
}

$quiz_id = $_GET['id'];
$student_id = $_GET['student_id'];

$exam = getRecord('quizzes', 'quiz_id = ' . $quiz_id);
$student = getRecord('users', 'user_id = ' . $student_id);
?>

<div class="card-header bg-white d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Exam: <?php echo $exam['title']; ?>, Subject: <?php echo $exam['subject']; ?>, Student: <?php echo $student['first_name'] . ' ' . $student['last_name']; ?> <i class="fas fa-clipboard-question"></i></h5>
    <!--a href="#" class="btn btn-sm btn-outline-primary">View All</!--a-->
</div>
<form id="gradeForm" method="post" action="../../controllers/submit-grade.php">
    <input type="hidden" name="quiz_id" value="<?php echo $quiz_id; ?>">
    <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>

                        <th>Question</th>
                        <th>Type</th>
                        <th>Points</th>
                        <th>Options</th>
                        <th>Points Earned</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    try {
                        $records = getAllRecords('questions', 'WHERE quiz_id = ' . $quiz_id);
                        if (!empty($records)) {
                            foreach ($records as $questions) {
                                $options = getAllRecords('question_options', 'WHERE question_id = ' . $questions['question_id']);

                    ?>
                                <tr>
                                    <td><?php echo $questions['question_text']; ?></td>
                                    <td><?php echo $questions['question_type'] == 'multiple_choice' ? 'Multiple Choice' : ($questions['question_type'] == 'true_false' ? 'True/False' : 'Short Answer'); ?></td>
                                    <td><?php echo $questions['points']; ?></td>
                                    <td>
                                        <?php
                                        if ($questions['question_type'] == 'multiple_choice') {
                                            foreach ($options as $option) {
                                                $student_answer = getAllRecords('student_answers', 'WHERE question_id = ' . $option['question_id'] . ' AND student_id = ' . $student_id);
                                                echo '<div class="form-check">';
                                                if ($option['option_id'] == $student_answer[0]['option_id']) {
                                                    echo '<input class="form-check-input" type="radio" name="options' . $option['option_id'] . '" id="option' . $option['option_id'] . '" value="' . $option['option_text'] . '" checked disabled>';
                                                } else {
                                                    echo '<input class="form-check-input" type="radio" name="options' . $option['option_id'] . '" id="option' . $option['option_id'] . '" value="' . $option['option_text'] . '" disabled>';
                                                }

                                                echo '<label class="form-check-label" for="option' . $option['option_id'] . '">' . $option['option_text'] . '</label>';
                                                echo '</div>';
                                            }
                                        } elseif ($questions['question_type'] == 'true_false') {
                                            foreach ($options as $option) {
                                                $student_answer = getAllRecords('student_answers', 'WHERE question_id = ' . $option['question_id'] . ' AND student_id = ' . $student_id);
                                                echo '<div class="form-check">';
                                                if ($option['option_id'] == $student_answer[0]['option_id']) {
                                                    echo '<input class="form-check-input" type="radio" name="options' . $option['option_id'] . '" id="option' . $option['option_id'] . '" value="' . $option['option_text'] . '" checked disabled>';
                                                } else {
                                                    echo '<input class="form-check-input" type="radio" name="options' . $option['option_id'] . '" id="option' . $option['option_id'] . '" value="' . $option['option_text'] . '" disabled>';
                                                }
                                                echo '<label class="form-check-label" for="option' . $option['option_id'] . '">' . $option['option_text'] . '</label>';
                                                echo '</div>';
                                            }
                                        } else {
                                            $student_answer = getAllRecords('student_answers', 'WHERE question_id = ' . $questions['question_id'] . ' AND student_id = ' . $student_id);
                                            echo $student_answer[0]['answer_text'];
                                        }
                                        ?>
                                    </td>
                                    <td>

                                        <?php
                                        $student_answer = getAllRecords('student_answers', 'WHERE question_id = ' . $questions['question_id'] . ' AND student_id = ' . $student_id);
                                        if ($questions['question_type'] == 'short_text' && $student_answer[0]['points_earned'] == 0) {
                                            echo "<input type='number' class='form-control' name='points_earned" . $questions['question_id'] . "'  min='0' max='" . $questions['points'] . "' required>";
                                        } else {
                                            echo intval($student_answer[0]['points_earned']) . ' / ' . $questions['points'];
                                        }

                                        ?>

                                    </td>
                                </tr>


                            <?php
                            } ?>
                            <tr class="table-secondary">
                                <td><strong>Total Points Earned:</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong>
                                        <?php
                                        $total_points = 0;
                                        foreach ($records as $record) {
                                            $student_answer = getAllRecords('student_answers', 'WHERE question_id = ' . $record['question_id'] . ' AND student_id = ' . $student_id);
                                            $total_points += intval($student_answer[0]['points_earned']);
                                        }
                                        echo $total_points . ' / ' . array_sum(array_column($records, 'points'));
                                        ?>
                                    </strong>
                                </td>
                            </tr>

                    <?php        } else {
                            echo '<tr><td colspan="5" class="text-center">No records found</td></tr>';
                        }
                    } catch (Exception $e) {
                        echo '<tr><td colspan="5" class="text-center text-danger">Error: ' . $e->getMessage() . '</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer bg-white">
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-outline-secondary" onclick="window.history.back()">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </button>
            <?php
            $student_records = getAllRecords('student_answers', 'WHERE quiz_id = ' . $quiz_id . ' AND student_id = ' . $student_id);
            if ($student_records[0]['is_graded'] == 0) {
            ?>
                <button type="submit" name="submit-exam" class="btn btn-success px-4">
                    <i class="fas fa-paper-plane mr-2"></i> Submit Grade
                </button>
            <?php
            } ?>
        </div>
    </div>
</form>


<!-- Modal for confirmation -->

<div class="modal fade" id="submitConfirmationModal" tabindex="-1" aria-labelledby="submitConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submitConfirmationModalLabel">Confirm Submission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to submit student's Grade? You cannot change them after submission.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="confirmSubmit">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Pure JavaScript solution for Bootstrap 5
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('gradeForm');
        const modal = new bootstrap.Modal('#submitConfirmationModal');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            modal.show();
        });

        document.getElementById('confirmSubmit').addEventListener('click', () => {
            form.submit();
        });
    });
</script>