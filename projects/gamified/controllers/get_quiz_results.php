<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../models/functions.php';

// Handle Excel export if requested
if (isset($_GET['export_excel'])) {
    $section_id = $_GET['id'] ?? 0;
    $quiz_id = $_GET['quiz_id'] ?? 0;
    $section_records = getAllRecords('sections', 'WHERE section_id = ' . $section_id);

    try {
        // Get all required data
        $quiz = getRecord('quizzes', $quiz_id);
        $students = getAllRecords('users', "WHERE section_id = {$section_id} AND is_admin = '0'");
        $questions = getAllRecords('questions', 'WHERE quiz_id = ' . $quiz_id);



        // Generate filename
        $filename = "Results_" . $section_records[0]['section_name'] . "_" . $quiz['title'] . "_" . date('Y-m-d') . ".xls";

        // Send headers first
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Output Excel content directly
        echo "Input Data Sheet for E-Class Record\n\n";
        echo "\tREGION\t\t\t\tDIVISION\n";
        echo "SCHOOL NAME\t\t\t\t\t\t\t\t\tSCHOOL ID\t\t\t\tSCHOOL YEAR\n\n";
        echo "FIRST QUARTER\t\t\tGRADE & SECTION: " . $section_records[0]['section_name'] . "\t\t\t\tTEACHER:\t\t\t\t\t\tSUBJECT:\t\tPE\n";
        echo "Student Name\tGrade\n";

        // Add student data

        foreach ($students as $student) {
            $answers = getAllRecords('student_answers', "WHERE quiz_id = {$quiz_id} AND student_id = {$student['user_id']}");
            $total_points = 0;
            foreach ($answers as $answer) {
                $question = getRecord('questions', $answer['question_id']);
                if ($question) {
                    $total_points += $question['points'] ?? 0;
                }
            }
            $total_points += $answers[0]['points_earned'] ?? 0;

            echo $student['first_name'] . " " . $student['last_name'] . "\t" .
                $total_points . "\n";
        }

        exit;
    } catch (Exception $e) {
        // Log error and show message
        error_log("Excel export error: " . $e->getMessage());
        die("Error generating Excel file: " . $e->getMessage());
    }
}
