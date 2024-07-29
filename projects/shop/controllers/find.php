<?php
include "../models/dbcon.php"; // Include the database connection

$sql1 = "SELECT DISTINCT product_name FROM products";
$result1 = mysqli_query($conn, $sql1) or die("Error " . mysqli_error($conn));
$sql2 = "SELECT DISTINCT product_brand FROM products";
$result2 = mysqli_query($conn, $sql2) or die("Error " . mysqli_error($conn));
$sql3 = "SELECT DISTINCT customer FROM transactions";
$result3 = mysqli_query($conn, $sql3) or die("Error " . mysqli_error($conn));


?>