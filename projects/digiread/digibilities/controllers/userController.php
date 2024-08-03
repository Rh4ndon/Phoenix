<?php

include '../models/connection.php';

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   
   $pass = $_POST['pass'];
   

   $select_students = $conn->prepare("SELECT * FROM `students` WHERE email = ? AND password = ?");
   $select_students->execute([$email, $pass]);
   $row_student = $select_students->fetch(PDO::FETCH_ASSOC);

   $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE email = ? AND password = ?");
   $select_admin->execute([$email, $pass]);
   $row_admin = $select_admin->fetch(PDO::FETCH_ASSOC);




 

   if($select_students->rowCount() > 0){

         session_start();
		   $_SESSION['id']=$row_student['student_id'];
        
         header('location:../student_home.php');
      
    
     
      
   } else if($select_admin->rowCount() > 0){

      session_start();
      $_SESSION['id']=$row_admin['admin_id'];
     
      header('location:../admin_home.php');
   
 
  
   
   }
   else{
    echo"<script>alert('Wrong Email & Password');</script>";
    header('location:../index.php');
   }

}


if(isset($_POST['save'])){

   $email = $_POST['email'];
   
   $pass = $_POST['pass'];
   $name = $_POST['name'];

   $select_students = $conn->prepare("SELECT * FROM `students` WHERE email = ? AND name = ?");
   $select_students->execute([$email, $name]);
   $row = $select_students->fetch(PDO::FETCH_ASSOC);


   //$select_renters = $conn->prepare("SELECT * FROM `renters` WHERE email = ? AND password = ?");
   //$select_renters->execute([$email, $pass]);
   //$row_renters = $select_renters->fetch(PDO::FETCH_ASSOC);

   if($select_students->rowCount() > 0){
         echo"<script>alert('Student Data Already Exist!');</script>";
         header('location:../index.php');        
   }else{
      $send_request = $conn->prepare("INSERT INTO `students`(email, password, name) VALUES(?,?,?)");
      $send_request->execute([$email, $pass, $name]);
    echo"<script>alert('Student Successfully Registered');</script>";
    header('location:../student_home.php');
   }

}

?>