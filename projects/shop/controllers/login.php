<?php
		include('../models/dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* owner */
			$query = "SELECT * FROM owner WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);

		/* cashier */
		$query_cashier = mysqli_query($conn,"SELECT * FROM cashier WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$row_cashier = mysqli_fetch_array($query_cashier);
		$num_row_cashier = mysqli_num_rows($query_cashier);
		
		/* assistant */
		$query_assistant = mysqli_query($conn,"SELECT * FROM assistant WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$row_assistant = mysqli_fetch_array($query_assistant);
		$num_row_assistant = mysqli_num_rows($query_assistant);

		/* user */
		$query_user = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$row_user = mysqli_fetch_array($query_user);
		$num_row_user = mysqli_num_rows($query_user);
		
		
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['owner_id'];
		echo "<script> location.href='../owner/owner_dashboard.php'; </script>";	
		}else if ($num_row_cashier > 0){
		$_SESSION['id']=$row_cashier['cashier_id'];
		echo "<script> location.href='../cashier/cashier_dashboard.php'; </script>";
		
		 }else if ($num_row_assistant > 0){
			$_SESSION['id']=$row_assistant['assistant_id'];
			echo "<script> location.href='../assistant/assistant_dashboard.php'; </script>";
			
		}else if ($num_row_user > 0){
			$_SESSION['id']=$row_user['user_id'];
			echo "<script> location.href='../user/user_dashboard.php'; </script>";
			
		}else{ 
			echo "<script> location.href='../index.php?msg=failed'; </script>";
		}	
				
		?>

	