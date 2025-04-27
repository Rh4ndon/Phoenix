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
            <table class="table table-hover" id="exam">
                <thead>
                    <tr>

                        <th>Question</th>
                        <th>Type</th>
                        <th>Points</th>
                        <th>Options</th>
                        <th>Correct Answer</th>
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
                                $student_answer = getAllRecords('student_answers', 'WHERE question_id = ' . $questions['question_id'] . ' AND student_id = ' . $student_id);

                    ?>
                                <tr>
                                    <td><?php echo $questions['question_text']; ?></td>
                                    <td><?php echo $questions['question_type'] == 'multiple_choice' ? 'Multiple Choice' : ($questions['question_type'] == 'true_false' ? 'True/False' : 'Short Answer'); ?></td>
                                    <td><?php echo $questions['points']; ?></td>
                                    <td>
                                        <?php
                                        if ($questions['question_type'] == 'multiple_choice' || $questions['question_type'] == 'true_false') {
                                            foreach ($options as $option) {
                                                echo '<div class="form-check">';
                                                if ($option['option_id'] == $student_answer[0]['option_id']) {
                                                    echo '<input class="form-check-input" type="radio" checked disabled>';
                                                    echo '<label class="form-check-label">' . $option['option_text'] . '</label>';
                                                } else {
                                                    echo '<input class="form-check-input" type="radio" disabled>';
                                                    echo '<label class="form-check-label text-muted">' . $option['option_text'] . '</label>';
                                                }
                                                echo '</div>';
                                            }
                                        } else {
                                            echo $student_answer[0]['answer_text'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($questions['question_type'] == 'multiple_choice' || $questions['question_type'] == 'true_false') {
                                            foreach ($options as $option) {
                                                if ($option['is_correct'] == 1) {
                                                    echo '<div class="form-check">';
                                                    echo '<input class="form-check-input" type="radio" checked disabled>';
                                                    echo '<label class="form-check-label font-weight-bold">' . $option['option_text'] . '</label>';
                                                    echo '</div>';
                                                }
                                            }
                                        } else {
                                            echo '<em>Manual grading required</em>';
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

    <div class="card-footer bg-white dont-print">
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
            } else { ?>
                <div>
                    <button type="button" id="printExam" class="btn btn-success px-4">
                        <i class="fas fa-print mr-2"></i> Print Exam
                    </button>
                    <button type="button" id="downloadExcel" class="btn btn-info px-4">
                        <i class="fas fa-download mr-2"></i> Download Exam
                    </button>
                </div>


            <?php } ?>
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
    document.addEventListener('DOMContentLoaded', () => {
        // Get the form element
        const form = document.getElementById('gradeForm');
        const modal = new bootstrap.Modal('#submitConfirmationModal');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            modal.show();
        });

        document.getElementById('confirmSubmit').addEventListener('click', () => {
            form.submit();
        });

        // Add Excel download functionality
        document.getElementById('downloadExcel')?.addEventListener('click', function() {
            const table = document.getElementById('exam');
            const rows = table.querySelectorAll('tr');
            let csvContent = "data:text/csv;charset=utf-8,";

            // Add headers
            const headers = ["Question", "Type", "Points", "Options", "Correct Answer", "Points Earned"];
            csvContent += headers.join(",") + "\r\n";

            // Process each data row
            rows.forEach((row, index) => {
                // Skip header row and total row (we'll handle it separately)
                if (index === 0 || row.classList.contains('table-secondary')) return;

                const cells = row.querySelectorAll('td');
                let rowData = [];

                // Question (column 1)
                rowData.push(`"${cells[0].textContent.trim().replace(/"/g, '""')}"`);

                // Type (column 2)
                rowData.push(`"${cells[1].textContent.trim()}"`);

                // Points (column 3)
                rowData.push(cells[2].textContent.trim());

                // Options (column 4) - format all options with selected marked
                const optionsCell = cells[3];
                const options = [];
                const optionElements = optionsCell.querySelectorAll('.form-check-label');
                const selectedOption = optionsCell.querySelector('input[type="radio"]:checked')?.nextElementSibling?.textContent.trim();

                optionElements.forEach(option => {
                    const optionText = option.textContent.trim();
                    const isSelected = optionText === selectedOption;
                    options.push(`${isSelected ? '✅ ' : ''}${optionText}`);
                });

                rowData.push(`"${options.join('\\n')}"`); // Use \n for line breaks in Excel

                // Correct Answer (column 5) - get the correct option
                const correctAnswerCell = cells[4];
                const correctOption = correctAnswerCell.querySelector('input[type="radio"]:checked')?.nextElementSibling?.textContent.trim();
                rowData.push(`"${correctOption || ''}"`);

                // Points Earned (column 6)
                const pointsCell = cells[5];
                const pointsInput = pointsCell.querySelector('input[type="number"]');
                rowData.push(pointsInput ? `${pointsInput.value}/${questions['points']}` : pointsCell.textContent.trim());

                // Add row to CSV content
                csvContent += rowData.join(",") + "\r\n";
            });

            // Add total points row
            const totalRow = table.querySelector('.table-secondary');
            if (totalRow) {
                const totalCells = totalRow.querySelectorAll('td');
                csvContent += `"Total Points Earned:",,,,,"${totalCells[5].textContent.trim()}"\r\n`;
            }

            // Create download link
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);

            // Set filename
            const examTitle = '<?php echo $exam["title"]; ?>';
            const studentName = '<?php echo $student["first_name"] . "_" . $student["last_name"]; ?>';
            link.setAttribute("download", `${examTitle}_${studentName}_Results.csv`);

            // Trigger download
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);


        });
        document.getElementById('printExam')?.addEventListener('click', function() {
            //Print page
            window.print();
        });
    });
</script>