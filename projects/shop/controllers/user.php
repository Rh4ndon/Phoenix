<?php 
 @include '../models/dbcon.php';
 if (isset($_POST['register'])) {
                           
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $psw = $_POST['pass'];


    mysqli_query($conn,"insert into user (firstname,lastname,username,password)
				values ('$fname','$lname','$uname','$pass')") or die(mysqli_error()); ?>

                                <script>
							 	window.location = "../index.php";
                                alert('Successfully Registered');
								</script>






<?php }?>