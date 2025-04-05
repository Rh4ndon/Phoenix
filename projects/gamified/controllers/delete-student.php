<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once '../models/functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // First delete all answers associated with the question
    deleteRecord('student_answers', 'student_id = ' . $id);


    $record = deleteRecord('users', 'user_id = ' . $id);
    if ($record) {
        header("Location: ../view/teacher/teacher-student-list.php?msg=Student Deleted Successfully");
    } else {
        header("Location: ../view/teacher/teacher-student-list.php?error=Failed to Delete Student");
    }
} else {
    header("Location: ../view/teacher/teacher-student-list.php?error=Invalid Request");
}
