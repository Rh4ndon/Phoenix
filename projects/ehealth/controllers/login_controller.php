<?php
		include('../models/database_handler.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
			$query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
		/* teacher */
		$query_teacher = mysqli_query($conn,"SELECT * FROM teacher WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$row_teahcer = mysqli_fetch_array($query_teacher);
		$num_row_teacher = mysqli_num_rows($query_teacher);
		
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['student_id'];
		echo "<script> location.href='../student/home.php'; </script>";	
		}else if ($num_row_teacher > 0){
		$_SESSION['id']=$row_teahcer['teacher_id'];
		echo "<script> location.href='../teacher/dashboard.php'; </script>";
		
		 }else{ 
			echo "<script> location.href='../index.php?msg=failed'; </script>";
		}	
				
		?>