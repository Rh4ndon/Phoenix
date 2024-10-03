<?php

include '../models/dbcon.php';
$del_id = $_GET['delete_cart'];

mysqli_query($conn,"DELETE from cart WHERE id= $del_id") or die(mysqli_error()); 

?>

<script>
							 	window.location = "../cashier/cashier_dashboard.php";
                         
								</script>
