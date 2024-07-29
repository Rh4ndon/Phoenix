
<?php
            @include '../models/database_handler.php';
            $announcement = $_POST['editorContent'];
			mysqli_query($conn,"insert into announcement (announce) values('$announcement')")or die(mysqli_error());
			echo "<script>
			window.location = '../teacher/dashboard.php';
			</script>";
			?>
			
		