<?php
                 @include '../models/database_handler.php';
                 if (isset($_POST['save'])) {
                
                     $username = $_POST['username'];
                     $firstname = $_POST['firstname'];
                     $lastname = $_POST['lastname'];
                     $age = $_POST['age'];
                     $contact = $_POST['contact'];
                     $password = $_POST['password'];
                     
                     
                     
                     $query = mysqli_query($conn,"select * from teacher where firstname = '$firstname' && lastname = '$lastname' ")or die(mysqli_error());
                     $count = mysqli_num_rows($query);
                     
                     if ($count > 0){ ?>
                     <script>
                     alert('Data Already Exist');
                     </script>
                     <?php
                     }else{

                     mysqli_query($conn,"insert into teacher (username,firstname,lastname,age,contact,password,profile)
                     values ('$username','$firstname','$lastname','$age','$contact','$password', 'https://tinypic.host/images/2022/12/19/img_avatar.png')") or die(mysqli_error()); ?>
                     <script>
                      window.location = "../index.php"; 
                     </script>
                     <?php   }}


                     
                 if (isset($_POST['submit'])) {
                
                     $username = $_POST['username'];
                     $firstname = $_POST['firstname'];
                     $lastname = $_POST['lastname'];
                     $year_sec = $_POST['year_sec'];
                     $course = $_POST['course'];
                     $age = $_POST['age'];
                     $gender = $_POST['gender'];
                     $contact = $_POST['contact'];
                     $password = $_POST['password'];
                     
                     
                     
                     $query = mysqli_query($conn,"select * from student where firstname = '$firstname' && lastname = '$lastname' ")or die(mysqli_error());
                     $count = mysqli_num_rows($query);
                     
                     if ($count > 0){ ?>
                     <script>
                     alert('Data Already Exist');
                     window.location = "../teacher/dashboard.php";  
                     </script>
                     <?php
                     }else{

                     mysqli_query($conn,"insert into student (username,firstname,lastname,year_sec,course,age,gender,contact,password,profile)
                     values ('$username','$firstname','$lastname','$year_sec','$course','$age','$gender','$contact','$password', 'https://tinypic.host/images/2022/12/19/img_avatar.png')") or die(mysqli_error()); 
                                     
                     
                     ?>

                       
                     
                     <script>
                      window.location = "../teacher/dashboard.php"; 
                     </script>
                     <?php   }} ?>