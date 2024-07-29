<?php
include 'session.php';
include '../models/connection.php';

if(isset($_POST['atlast'])){

   $q1 = $_POST['q1'];
   $q2 = $_POST['q2'];
   $q3 = $_POST['q3'];

   $q4 = $_POST['q4'];
   $q5 = $_POST['q5'];
   $q6 = $_POST['q6'];





   

   $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6;



   
   

   $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
   $select_results->execute([$session_id, 'atlast']);




   if($select_results->rowCount() > 0){   

    $row = $select_results->fetch(PDO::FETCH_ASSOC);

    header('location:../score.php?score='.$row['score'].'&test=atlast');
      
   }
  else{
    
    $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
    $save_result->execute([$session_id, 'atlast', 'easy', 'english', $total]);

    header('location:../result_atlast.php');



   }

}else if(isset($_POST['thebest'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'thebest']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=thebest');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'thebest', 'easy', 'english', $total]);

   header('location:../result_thebest.php');



  }

} else if(isset($_POST['icecream'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'icecream']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=icecream');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'icecream', 'easy', 'english', $total]);

   header('location:../result_icecream.php');



  }

} else if(isset($_POST['simila'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'simila']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=simila');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'simila', 'easy', 'filipino', $total]);

   header('location:../result_simila.php');



  }

} else if(isset($_POST['angdaga'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'angdaga']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=angdaga');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'angdaga', 'easy', 'filipino', $total]);

   header('location:../result_angdaga.php');



  }

} else if(isset($_POST['simuning'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'simuning']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=simuning');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'simuning', 'easy', 'filipino', $total]);

   header('location:../result_simuning.php');



  }

} else if(isset($_POST['whisper'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'whisper']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=whisper');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'whisper', 'average', 'english', $total]);

   header('location:../result_whisper.php');



  }

} else if(isset($_POST['magician'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'magician']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=magician');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'magician', 'average', 'english', $total]);

   header('location:../result_magician.php');



  }

} else if(isset($_POST['anger'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'anger']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=anger');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'anger', 'average', 'english', $total]);

   header('location:../result_anger.php');



  }

} else if(isset($_POST['sayaw'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'sayaw']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=sayaw');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'sayaw', 'average', 'filipino', $total]);

   header('location:../result_sayaw.php');



  }

} else if(isset($_POST['inay'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'inay']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=inay');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'inay', 'average', 'filipino', $total]);

   header('location:../result_inay.php');



  }

}else if(isset($_POST['pamilya'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'pamilya']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=pamilya');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'pamilya', 'average', 'filipino', $total]);

   header('location:../result_pamilya.php');



  }

}else if(isset($_POST['clockmaker'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];

  $q10 = $_POST['q10'];
  $q11 = $_POST['q11'];
  $q12 = $_POST['q12'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 +$q11 + $q12;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'clockmaker']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=clockmaker');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'clockmaker', 'difficult', 'english', $total]);

   header('location:../result_clockmaker.php');



  }

} else if(isset($_POST['woods'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];

  $q10 = $_POST['q10'];
  $q11 = $_POST['q11'];
  $q12 = $_POST['q12'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 +$q11 + $q12;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'woods']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=woods');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'woods', 'difficult', 'english', $total]);

   header('location:../result_woods.php');



  }

}  else if(isset($_POST['echoes'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];

  $q10 = $_POST['q10'];
  $q11 = $_POST['q11'];
  $q12 = $_POST['q12'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 +$q11 + $q12;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'echoes']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=echoes');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'echoes', 'difficult', 'english', $total]);

   header('location:../result_echoes.php');



  }

}  else if(isset($_POST['sibil'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];

  $q10 = $_POST['q10'];
  $q11 = $_POST['q11'];
  $q12 = $_POST['q12'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 +$q11 + $q12;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'sibil']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=sibil');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'sibil', 'difficult', 'filipino', $total]);

   header('location:../result_sibil.php');



  }

} else if(isset($_POST['hukbo'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];

  $q10 = $_POST['q10'];
  $q11 = $_POST['q11'];
  $q12 = $_POST['q12'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 +$q11 + $q12;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'hukbo']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=hukbo');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'hukbo', 'difficult', 'filipino', $total]);

   header('location:../result_hukbo.php');



  }

} else if(isset($_POST['bato'])){

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];

  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];

  $q10 = $_POST['q10'];
  $q11 = $_POST['q11'];
  $q12 = $_POST['q12'];
 

  $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 +$q11 + $q12;



  $select_results = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
  $select_results->execute([$session_id, 'bato']);




  if($select_results->rowCount() > 0){   

   $row = $select_results->fetch(PDO::FETCH_ASSOC);

   header('location:../score.php?score='.$row['score'].'&test=bato');
     
  }
 else{
   
   $save_result = $conn->prepare("INSERT INTO `test_results`(student_id, test_title, test_level, test_language, score) VALUES(?,?,?,?,?)");
   $save_result->execute([$session_id, 'bato', 'difficult', 'filipino', $total]);

   header('location:../result_bato.php');



  }

}


?>