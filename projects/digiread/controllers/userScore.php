<?php
include 'models/connection.php';

//Easy

$select_scores_english = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_level = ? AND test_language = ?");
$select_scores_english->execute([$session_id, 'easy', 'english']);

if($select_scores_english->rowCount() > 0){
    $row_scores_english = $select_scores_english->fetch(PDO::FETCH_ASSOC);
    $easy_english = $row_scores_english['score'];
    
}else{
    $easy_english = 0;
}


$select_scores_filipino = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_level = ? AND test_language = ?");
$select_scores_filipino->execute([$session_id, 'easy', 'filipino']);

if($select_scores_filipino->rowCount() > 0){
    $row_scores_filipino = $select_scores_filipino->fetch(PDO::FETCH_ASSOC);
    $easy_filipino = $row_scores_filipino['score'];
    
}else{
    $easy_filipino = 0;
}

//Average

$select_scores_english_average = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_level = ? AND test_language = ?");
$select_scores_english_average->execute([$session_id, 'average', 'english']);

if($select_scores_english_average->rowCount() > 0){
    $row_scores_english_average = $select_scores_english_average->fetch(PDO::FETCH_ASSOC);
    $average_english = $row_scores_english_average['score'];
    
}else{
    $average_english = 0;
}

$select_scores_filipino_average = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_level = ? AND test_language = ?");
$select_scores_filipino_average->execute([$session_id, 'average', 'filipino']);

if($select_scores_filipino_average->rowCount() > 0){
    $row_scores_filipino_average = $select_scores_filipino_average->fetch(PDO::FETCH_ASSOC);
    $average_filipino = $row_scores_filipino_average['score'];
    
}else{
    $average_filipino = 0;
}

//Difficult

$select_scores_english_difficult = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_level = ? AND test_language = ?");
$select_scores_english_difficult->execute([$session_id, 'difficult', 'english']);

if($select_scores_english_difficult->rowCount() > 0){
    $row_scores_english_difficult = $select_scores_english_difficult->fetch(PDO::FETCH_ASSOC);
    $difficult_english = $row_scores_english_difficult['score'];
    
}else{
    
    $difficult_english = 0;
}

$select_scores_filipino_difficult = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_level = ? AND test_language = ?");
$select_scores_filipino_difficult->execute([$session_id, 'difficult', 'filipino']);

if($select_scores_filipino_difficult->rowCount() > 0){
    $row_scores_filipino_difficult = $select_scores_filipino_difficult->fetch(PDO::FETCH_ASSOC);
    $difficult_filipino = $row_scores_filipino_difficult['score'];
    
}else{

    $difficult_filipino = 0;
}
 
 
?>