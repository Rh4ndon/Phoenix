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

        // Calculate total possible points
        $total_quiz_points = array_sum(array_column($questions, 'points'));

        // Prepare Excel content
        $excelContent = "Input Data Sheet for E-Class Record\n\n";
        $excelContent .= "\tREGION\t\t\t\tDIVISION\n";
        $excelContent .= "SCHOOL NAME\t\t\t\t\t\t\t\t\tSCHOOL ID\t\t\t\tSCHOOL YEAR\n\n";
        $excelContent .= "FIRST QUARTER\t\t\tGRADE & SECTION: " . $section_records[0]['section_name'] . "\t\t\t\tTEACHER:\t\t\t\t\t\tSUBJECT:\t\tPE\n";
        $excelContent .= "Student Name\t\t\t\t\t\t\t\t\t\t\t\t\t\tGrade\n";

        // Add student data
        foreach ($students as $student) {
            $answers = getAllRecords('student_answers', "WHERE quiz_id = {$quiz_id} AND student_id = {$student['user_id']}");
            $total_points = array_sum(array_column($answers, 'points_earned'));

            $excelContent .= $student['first_name'] . " " . $student['last_name'] . "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" .
                $total_points . "/" . $total_quiz_points . "\n";
        }

        // Generate filename
        $filename = "Results_" . $section_records[0]['section_name'] . "_" . $quiz['title'] . "_" . date('Y-m-d') . ".xlsx";

        // For actual XLSX file, we'll use a simple XML structure (Excel 2003+ compatible)
        $xml = '<?xml version="1.0"?>
        <?mso-application progid="Excel.Sheet"?>
        <Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
          xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet">
          <Worksheet ss:Name="Quiz Results">
            <Table>';

        // Convert our text content to XML rows
        $lines = explode("\n", $excelContent);
        foreach ($lines as $line) {
            $cells = explode("\t", $line);
            $xml .= '<Row>';
            foreach ($cells as $cell) {
                $xml .= '<Cell><Data ss:Type="String">' . htmlspecialchars($cell) . '</Data></Cell>';
            }
            $xml .= '</Row>';
        }

        $xml .= '</Table></Worksheet></Workbook>';

        // Send headers and content
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        echo $xml;
        exit;
    } catch (Exception $e) {
        // Log error and show message
        error_log("Excel export error: " . $e->getMessage());
        die("Error generating Excel file: " . $e->getMessage());
    }
}
