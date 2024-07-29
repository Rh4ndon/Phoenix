<?php  @include 'session.php'; ?>
<?php
            @include '../models/database_handler.php';
			if (isset($_POST['save'])){
			$date = $_POST['date'];
			$complaints = $_POST['complaints'];
            $diagnosis = $_POST['diagnosis'];
            $treatment = $_POST['treatment'];
            $remarks = $_POST['remarks'];
            $user = $_POST['user_id'];
            $username = $_POST['username'];
            $physician = $_POST['physician'];
            $course = $_POST['course'];
			mysqli_query($conn,"insert into trecord (username,user_id,date,complaints,diagnosis,treatment,remarks,physician_or_nurse) values('$username','$user','$date','$complaints','$diagnosis','$treatment','$remarks','$physician')")or die(mysqli_error());
			?>
			<script>
			window.location = '../teacher/edit<?php echo"$course";?>.php?id=<?php echo"$user";?>';
			</script>
			<?php
			}
			?>

<?php
            @include '../models/database_handler.php';
			if (isset($_POST['delete'])){
			$delete_id = $_POST['delete_id'];
			$course = $_POST['page'];
            $user = $_POST['get_id'];
           
			$delete_record = " DELETE FROM `trecord` WHERE trecord_id = $delete_id ";

    mysqli_query($conn, $delete_record);
			?>
			<script>
			window.location = '../teacher/edit<?php echo"$course";?>.php?id=<?php echo"$user";?>';
			</script>
			<?php
			}
			?>

<?php
            @include '../models/database_handler.php';
			if (isset($_POST['health'])){

			
			$course = $_POST['page'];
            $user = $_POST['get_id'];

			$sy = $_POST['school_y'];
			$sem = $_POST['sem'];
			
			$cp = $_POST['cp'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
            $civil = $_POST['civil'];
			$consult_date = $_POST['consult_date'];
			$height = $_POST['height'];
			$weight = $_POST['weight'];
			$bday = $_POST['bday'];
			$pob = $_POST['pob'];
			$brgy = $_POST['brgy'];
			$town = $_POST['town'];
			$father = $_POST['father'];
			$mother = $_POST['mother'];
			$guard_brgy = $_POST['guard_brgy'];
			$guard_town = $_POST['guard_town'];

			$hyper = isset($_POST['hypertension']) ?  1 : 0;
			$diabetes = isset($_POST['diabetes']) ?  1 : 0;
			$stroke = isset($_POST['stroke']) ?  1 : 0;
			$asthma = isset($_POST['asthma']) ?  1 : 0;
			$kidney = isset($_POST['kidney']) ?  1 : 0;
			$glaucoma = isset($_POST['glaucoma']) ?  1 : 0;
			$myopia = isset($_POST['myopia']) ?  1 : 0;
			$hyperopia = isset($_POST['hyperopia']) ?  1 : 0;
			$cataract = isset($_POST['cataract']) ?  1 : 0;
			$harelip = isset($_POST['harelip']) ?  1 : 0;
			$cancer = isset($_POST['cancer']) ?  1 : 0;
			$cancerspec = $_POST['cancerspec'];
			$allergy = isset($_POST['allergy']) ?  1 : 0;
			$allergyspec = $_POST['allergyspec'];
			$otherfamed = isset($_POST['otherfamed']) ?  1 : 0;
			$otherfamedspec = $_POST['otherfamedspec'];

			$measles = isset($_POST['measles']) ?  1 : 0;
			$mumps = isset($_POST['mumps']) ?  1 : 0;
			$chickenpox = isset($_POST['chickenpox']) ?  1 : 0;
			$germanmeasles = isset($_POST['germanmeasles']) ?  1 : 0;
			$diphtheria = isset($_POST['diphtheria']) ?  1 : 0;
			$pertussis = isset($_POST['pertussis']) ?  1 : 0;
			$tetanus = isset($_POST['tetanus']) ?  1 : 0;
			$otherpersonal = isset($_POST['otherpersonal']) ?  1 : 0;
			$otherpersonalspec = $_POST['otherpersonalspec'];

			$diphteriavac = isset($_POST['diphteriavac']) ?  1 : 0;
			$hepa_vac = isset($_POST['hepa_vac']) ?  1 : 0;
			$fluvac = isset($_POST['fluvac']) ?  1 : 0;
			$mumpsvac = isset($_POST['mumpsvac']) ?  1 : 0;
			$covidvac = isset($_POST['covidvac']) ?  1 : 0;
			$othersvac = isset($_POST['othersvac']) ?  1 : 0;
			$othervacspec = $_POST['othervacspec'];
			
			if($gender == 'Female'){

			$mensperiod = $_POST['mensperiod'];
			$mensdays = $_POST['mensdays'];
			$dismeno = $_POST['dismeno'];
			} else {
			$mensperiod = 'not female';
			$mensdays = 'not female';
			$dismeno = 'not female';
			}
			

			$hospi = $_POST['hospi'];
			$hospidiagnos = $_POST['hospidiagnos'];
			$peirce = $_POST['peirce'];
			$piercedwhen = $_POST['piercedwhen'];
			$tattoo = $_POST['tattoo'];
			$tattoowhere = $_POST['tattoowhere'];
			$tattoowhen = $_POST['tattoowhen'];
			$smoke = $_POST['smoke'];
			$stickpd = $_POST['stickpd'];
			$alcohol = $_POST['alcohol'];
			$brand = $_POST['brand'];
			$often = $_POST['often'];
			$otherdisease = $_POST['otherdisease'];
			$otherdiag = $_POST['otherdiag'];
			$othertreat = $_POST['othertreat'];


			mysqli_query($conn,"update student set age = '$age', gender = '$gender', contact = '$cp' where student_id = '$user'")or die(mysqli_error());

			mysqli_query($conn,"update health set civil = '$civil',semester = '$sem',school_year = '$sy',consult_date = '$consult_date' ,height = '$height' ,weight = '$weight' ,bday = '$bday',pobirth = '$pob' ,brgy = '$brgy',town = '$town',
			father = '$father' ,mother = '$mother', guardian_brgy = '$guard_brgy',guardian_town = '$guard_town', hypertension = '$hyper', diabetes = '$diabetes',stroke = '$stroke', asthma = '$asthma',
			kidney = '$kidney', glaucoma = '$glaucoma', myopia = '$myopia', hyperopia =	'$hyperopia', cataract = '$cataract', harelip = '$harelip', cancer = '$cancer', 
			cancer_spec = '$cancerspec', allergy = '$allergy', allergy_spec = '$allergyspec', othersfamed = '$otherfamed', otherfamed_spec = '$otherfamedspec', 
			measles = '$measles', mumps = '$mumps', chickenpox = '$chickenpox', german_measles = '$germanmeasles', diphtheria = '$diphtheria', pertussis = '$pertussis',
			tetanus = '$tetanus', otherpersonal = '$otherpersonal', otherspersonal_spec = '$otherpersonalspec',diphteria_vac = '$diphteriavac', hepa_vac = '$hepa_vac',flu_vac ='$fluvac',
			mumps_vac = '$mumpsvac',covid_vac = '$covidvac',others_vac = '$othersvac',others_vac_spec = '$othervacspec',mens_period = '$mensperiod',mens_days = '$mensdays',
			dysmenorhea = '$dismeno',hospitalization = '$hospi',hospi_diagnos = '$hospidiagnos',pierced = '$peirce',pierced_whens = '$piercedwhen' ,tattoo = '$tattoo',
			tattoo_where = '$tattoowhere',tattoo_when = '$tattoowhen',smoke = '$smoke',stick_day = '$stickpd',alcohol = '$alcohol',brand = '$brand',alcohol_often = '$often',
			other_disease = '$otherdisease',other_diagnos = '$otherdiag',other_treat ='$othertreat' 
			where student_id = '$user'  && semester ='$sem' ")or die(mysqli_error());


			
			?>
			<script>
			window.location = '../teacher/edit.php?course=<?php echo"$course";?>&&id=<?php echo"$user";?>&&sem=<?php echo"$sem";?>';
			</script>
			<?php
			}
			?>



<?php
            @include '../models/database_handler.php';
			if (isset($_POST['strupdate'])){

			
			$course = $_POST['page'];
            $user = $_POST['get_id'];
			
			$sem = $_POST['sem'];
			
			$strhypertension = isset($_POST['strhypertension']) ?  1 : 0;
			$strdiabetes = isset($_POST['strdiabetes']) ?  1 : 0;
			$strcardio = isset($_POST['strcardio']) ?  1 : 0;
			$strptb= isset($_POST['strptb']) ?  1 : 0;
			$strhyperacid = isset($_POST['strhyperacid']) ?  1 : 0;
			$strallergy = isset($_POST['strallergy']) ?  1 : 0;
			$strepilepsy = isset($_POST['strepilepsy']) ?  1 : 0;
			$strasthma = isset($_POST['strasthma']) ?  1 : 0;
			$strdysmenorrhea = isset($_POST['strdysmenorrhea']) ?  1 : 0;
			$strliver = isset($_POST['strliver']) ?  1 : 0;
			$struti = isset($_POST['struti']) ?  1 : 0;
			$strothers = isset($_POST['strothers']) ?  1 : 0;
			$strothers_spec = $_POST['strothers_spec'];
			
			
			
			

			$pebp = $_POST['pebp'];
			$pepr = $_POST['pepr'];
			$prheent = $_POST['prheent'];
			$pechest = $_POST['pechest'];
			$peheart = $_POST['peheart'];
			$pelungs = $_POST['pelungs'];
			$peabdomen = $_POST['peabdomen'];
			$pegenitalia = $_POST['pegenitalia'];
			$peextrem = $_POST['peextrem'];
			$peskin = $_POST['peskin'];
			$peneurology = $_POST['peneurology'];
			$peother_disease = $_POST['peother_disease'];
			$pediagnos = $_POST['pediagnos'];
			$petreatment = $_POST['petreatment'];
			$peremarks = $_POST['peremarks'];


			mysqli_query($conn,"update str set 
			strhypertension = '$strhypertension', 
			strdiabetes = '$strdiabetes',
			strcardio = '$strcardio',
			strptb = '$strptb',
			strhyperacid = '$strhyperacid',
			strallergy = '$strallergy',
			strepilepsy = '$strepilepsy',
			strasthma = '$strasthma',
			strdysmenorrhea = '$strdysmenorrhea',
			strliver = '$strliver',
			struti = '$struti',
			strothers = '$strothers',
			strothers_spec = '$strothers_spec',
			pebp = '$pebp',
			pepr = '$pepr',
			prheent = '$prheent',
			pechest = '$pechest',
			peheart = '$peheart',
			pelungs = '$pelungs',
			peabdomen = '$peabdomen',
			pegenitalia = '$pegenitalia',
			peextrem = '$peextrem',
			peskin = '$peskin',
			peneurology = '$peneurology',
			peother_disease = '$peother_disease',
			pediagnos = '$pediagnos',
			petreatment = '$petreatment',
			peremarks = '$peremarks'

			where student_id = '$user' && semester ='$sem' ")or die(mysqli_error());

			
			
			?>
			<script>
			window.location = '../teacher/edit.php?course=<?php echo"$course";?>&&id=<?php echo"$user";?>&&sem=<?php echo"$sem";?>';
			</script>
			<?php
			}
			?>


<?php
            @include '../models/database_handler.php';
			if (isset($_POST['editstudent'])){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $year_sec = $_POST['year_sec'];
            $course = $_POST['course'];
            $user = $_POST['user_id'];
            $mobile = $_POST['mobile'];
			$age = $_POST['age'];
            
			mysqli_query($conn,"update student set firstname = '$fname', lastname = '$lname', age = '$age', course = '$course', gender = '$gender', contact = '$mobile', year_sec = '$year_sec' where student_id = '$user'")or die(mysqli_error());
			?>
			<script>
			window.location = '../student/student_profile.php?id=<?php echo"$user";?>';
			</script>
			<?php
			}
			?>


<?php
            @include '../models/database_handler.php';
			if (isset($_POST['changeprofile'])){
			
            $user = $_POST['user_id'];
            
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);


			move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/" . $_FILES["image"]["name"]);
            $location = "../uploads/" . $_FILES["image"]["name"];
            
			mysqli_query($conn,"update student set profile = '$location' where student_id = '$user'")or die(mysqli_error());
			?>
			<script>
			window.location = '../student/student_profile.php?id=<?php echo"$user";?>';
			</script>
			<?php
			}
			?>





<?php
            @include '../models/database_handler.php';
			if (isset($_POST['delete_announce'])){
			$delete_id = $_POST['delete_id'];
			
           
			$delete_record = " DELETE FROM `announcement` WHERE announce_id = $delete_id ";

    		mysqli_query($conn, $delete_record);
			?>
			<script>
			window.location = '../teacher/dashboard.php';
			</script>
			<?php
			}
			?>