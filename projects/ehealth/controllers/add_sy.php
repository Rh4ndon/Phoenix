<?php
            @include '../models/database_handler.php';
			if (isset($_POST['save_sem'])){
			
			$sy_f = $_POST['sy_from'];
            $sy_t = $_POST['sy_to'];
            
			mysqli_query($conn,"insert into school_year (sy_name) values('$sy_f-$sy_t')")or die(mysqli_error());

			mysqli_query($conn,"insert into semester (sem_name) values('1stSem,$sy_f-$sy_t')")or die(mysqli_error());
			mysqli_query($conn,"insert into semester (sem_name) values('2ndSem,$sy_f-$sy_t')")or die(mysqli_error());
			

    		
			?>
			<script>
			window.location = '../teacher/dashboard.php';
			</script>
			<?php
			}
			?>