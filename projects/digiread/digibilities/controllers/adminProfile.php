<?php
include 'models/connection.php';

$select_admin = $conn->prepare("SELECT * FROM `admin` WHERE admin_id = ? ");
$select_admin->execute([$session_id]);
$row_admin = $select_admin->fetch(PDO::FETCH_ASSOC);

$language = $row_admin['language'];

?>