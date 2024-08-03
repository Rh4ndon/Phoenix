<?php
include 'models/connection.php';

$select_students = $conn->prepare("SELECT * FROM `students` WHERE student_id = ? ");
$select_students->execute([$session_id]);
$row_students = $select_students->fetch(PDO::FETCH_ASSOC);

?>