<?php include('header.php'); ?>
<!-- Custom CSS -->
<link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/select2/dist/css/select2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/jquery-minicolors/jquery.minicolors.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/quill/dist/quill.snow.css"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
<script src="js/custom.js"></script>
<link rel="stylesheet" href="css/style.css">

  <style>


  </style>
<body>
<?php include('preloader.php'); ?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
    <?php include('navbar.php'); ?>
    <?php include('dashboard_sidebar.php'); ?>
        <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Statistics </h4>
              
              <div class="ms-auto text-end">
              
              </div>
            </div>
          </div>
        </div>
        

        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
       
       
           <!-- card -->
           <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Counts of Gender Per Semester</h4>
                  <br>
                
                  <?php
    @include '../models/database_handler.php';
	$query_sem = mysqli_query($conn,"select * from semester") or die(mysqli_error());
	while ($row_sem = mysqli_fetch_array($query_sem)) { 
    $sem = $row_sem['sem_name'];
    ?>
                <?php 
								$query_male_sem = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.gender = 'Male' && health.semester = '$sem' ")or die(mysqli_error());
								$count_male_sem = mysqli_num_rows($query_male_sem);
								 
								$query_female_sem = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.gender = 'Female' && health.semester = '$sem' ")or die(mysqli_error());
								$count_female_sem = mysqli_num_rows($query_female_sem);

                $total_gen = $count_male_sem + $count_female_sem;

                if ($count_male_sem>0){
                  $percent_male = round(($count_male_sem/$total_gen)*100);
                }
                else{
                  $percent_male = 0;
                }
                
                if ($count_female_sem>0){
                  $percent_female = round(($count_female_sem/$total_gen)*100);
                }
                else{
                  $percent_female = 0;
                }
               
                
               
								?>

                               
                  <h6><?php echo $sem; ?></h6>

                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_male; ?>% is Male</span>
                      <div class="ms-auto">
                        <span><?php echo $count_male_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-success"
                        role="progressbar"
                        style="width: <?php echo $percent_male; ?>%"
                        aria-valuenow="<?php echo $count_male_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>


                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_female; ?>% is Female</span>
                      <div class="ms-auto">
                        <span><?php echo $count_female_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped"
                        role="progressbar"
                        style="width: <?php echo $percent_female; ?>%"
                        aria-valuenow="<?php echo $count_female_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <br>
                  



                  <?php } ?>  

              

                </div>
              </div>


                <!-- card -->
           <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Counts of Gender Per School Year</h4>
                  <br>
                
                  <?php
    @include '../models/database_handler.php';
	$query_year = mysqli_query($conn,"select * from school_year") or die(mysqli_error());
	while ($row_year = mysqli_fetch_array($query_year)) { 
    $year = $row_year['sy_name'];
    
    ?>
                <?php 
								$query_male_year = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.gender = 'Male' && health.school_year ='$year' group by health.student_id ")or die(mysqli_error());
								$count_male_year = mysqli_num_rows($query_male_year);

								 
								$query_female_year = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.gender = 'Female' && health.school_year ='$year' group by health.student_id ")or die(mysqli_error());
								$count_female_year = mysqli_num_rows($query_female_year);


                $total_gen_sy = $count_male_year + $count_female_year;

                if ($count_male_year>0){
                  $percent_male_year = round(($count_male_year/$total_gen_sy)*100);
                }
                else{
                  $percent_male_year = 0;
                }
                
                if ($count_female_year>0){
                  $percent_female_year = round(($count_female_year/$total_gen_sy)*100);
                }
                else{
                  $percent_female_year = 0;
                }
               
                
               
								?>

                               
                  <h6>S.Y.<?php echo $year; ?></h6>

                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_male_year; ?>% is Male</span>
                      <div class="ms-auto">
                        <span><?php echo $count_male_year; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-success"
                        role="progressbar"
                        style="width: <?php echo $percent_male_year; ?>%"
                        aria-valuenow="<?php echo $count_male_year; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>


                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_female_year; ?>% is Female</span>
                      <div class="ms-auto">
                        <span><?php echo $count_female_year; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped"
                        role="progressbar"
                        style="width: <?php echo $percent_female_year; ?>%"
                        aria-valuenow="<?php echo $count_female_year; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <br>



                  <?php } ?>  

              

                </div>
              </div>




              <!-- card -->
           <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Counts of Course Per Semester</h4>
                  <br>
                
                  <?php
    @include '../models/database_handler.php';
	$query_course = mysqli_query($conn,"select * from semester") or die(mysqli_error());
	while ($row_course = mysqli_fetch_array($query_course)) { 
    $sem_course = $row_course['sem_name'];
    ?>
                <?php 
								$query_bsit_sem = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.course = 'BSIT' && health.semester = '$sem_course' ")or die(mysqli_error());
								$count_bsit_sem = mysqli_num_rows($query_bsit_sem);
								 
								$query_bsed_sem = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.course = 'BSED' && health.semester = '$sem_course' ")or die(mysqli_error());
								$count_bsed_sem = mysqli_num_rows($query_bsed_sem);

                $query_btvted_sem = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.course = 'BTVTED' && health.semester = '$sem_course' ")or die(mysqli_error());
								$count_btvted_sem = mysqli_num_rows($query_btvted_sem);

                $query_datbat_sem = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.course = 'DAT-BAT' && health.semester = '$sem_course' ")or die(mysqli_error());
								$count_datbat_sem = mysqli_num_rows($query_datbat_sem);

                $total_course = $count_bsit_sem + $count_bsed_sem + $count_btvted_sem + $count_datbat_sem;

                if ($count_bsit_sem>0){
                  $percent_bsit = round(($count_bsit_sem/$total_course)*100);
                }
                else{
                  $percent_bsit = 0;
                }
                
                if ($count_bsed_sem>0){
                  $percent_bsed = round(($count_bsed_sem/$total_course)*100);
                }
                else{
                  $percent_bsed = 0;
                }
               
                if ($count_btvted_sem>0){
                  $percent_btvted = round(($count_btvted_sem/$total_course)*100);
                }
                else{
                  $percent_btvted = 0;
                }

                if ($count_datbat_sem>0){
                  $percent_datbat = round(($count_datbat_sem/$total_course)*100);
                }
                else{
                  $percent_datbat = 0;
                }
                
               
								?>

                               
                  <h6><?php echo $sem_course; ?></h6>
                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_bsit; ?>% is BSTI</span>
                      <div class="ms-auto">
                        <span><?php echo $count_bsit_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-success"
                        role="progressbar"
                        style="width: <?php echo $percent_bsit; ?>%"
                        aria-valuenow="<?php echo $count_bsit_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>


                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_bsed; ?>% is BSED</span>
                      <div class="ms-auto">
                        <span><?php echo $count_bsed_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-info"
                        role="progressbar"
                        style="width: <?php echo $percent_bsed; ?>%"
                        aria-valuenow="<?php echo $count_bsed_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_btvted; ?>% is BTVTED</span>
                      <div class="ms-auto">
                        <span><?php echo $count_btvted_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-danger"
                        role="progressbar"
                        style="width: <?php echo $percent_btvted; ?>%"
                        aria-valuenow="<?php echo $count_btvted_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_datbat; ?>% is DAT-BAT</span>
                      <div class="ms-auto">
                        <span><?php echo $count_datbat_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped"
                        role="progressbar"
                        style="width: <?php echo $percent_datbat; ?>%"
                        aria-valuenow="<?php echo $count_datbat_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  <br>





                  <?php } ?>  

              

                </div>
              </div>





              <!-- card -->
           <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Counts of Course Per School Year</h4>
                  <br>
                
                  <?php
    @include '../models/database_handler.php';
	$query_course_year = mysqli_query($conn,"select * from school_year") or die(mysqli_error());
	while ($row_course_year = mysqli_fetch_array($query_course_year)) { 
    $year_course = $row_course_year['sy_name'];
    
    ?>
                <?php 
								$query_bsit_year = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.course = 'BSIT' && health.school_year ='$year_course' group by health.student_id ")or die(mysqli_error());
								$count_bsit_year = mysqli_num_rows($query_bsit_year);

								 
								$query_bsed_year = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.course = 'BSED' && health.school_year ='$year_course' group by health.student_id ")or die(mysqli_error());
								$count_bsed_year = mysqli_num_rows($query_bsed_year);

                $query_btvted_year = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.course = 'BTVTED' && health.school_year ='$year_course' group by health.student_id ")or die(mysqli_error());
								$count_btvted_year = mysqli_num_rows($query_btvted_year);

                $query_datbat_year = mysqli_query($conn,"select * from health LEFT JOIN student on health.student_id = student.student_id where student.course = 'DAT-BAT' && health.school_year ='$year_course' group by health.student_id ")or die(mysqli_error());
								$count_datbat_year = mysqli_num_rows($query_datbat_year);


                $total_course_sy = $count_bsit_year + $count_bsed_year + $count_btvted_year + $count_datbat_year;

                if ($count_bsit_year>0){
                  $percent_bsit_year = round(($count_bsit_year/$total_course_sy)*100);
                }
                else{
                  $percent_bsit_year = 0;
                }
                
                if ($count_bsed_year>0){
                  $percent_bsed_year = round(($count_bsed_year/$total_course_sy)*100);
                }
                else{
                  $percent_bsed_year = 0;
                }

                if ($count_btvted_year>0){
                  $percent_btvted_year = round(($count_btvted_year/$total_course_sy)*100);
                }
                else{
                  $percent_btvted_year = 0;
                }

                if ($count_datbat_year>0){
                  $percent_datbat_year = round(($count_datbat_year/$total_course_sy)*100);
                }
                else{
                  $percent_datbat_year = 0;
                }
               
                
               
								?>

                               
                  <h6>S.Y.<?php echo $year_course; ?></h6>
                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_bsit_year; ?>% is BSIT</span>
                      <div class="ms-auto">
                        <span><?php echo $count_bsit_year; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-success"
                        role="progressbar"
                        style="width: <?php echo $percent_bsit_year; ?>%"
                        aria-valuenow="<?php echo $count_bsit_year; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>


                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_bsed_year; ?>% is BSED</span>
                      <div class="ms-auto">
                        <span><?php echo $count_bsed_year; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped"
                        role="progressbar"
                        style="width: <?php echo $percent_bsed_year; ?>%"
                        aria-valuenow="<?php echo $count_bsed_year; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_btvted_year; ?>% is BTVTED</span>
                      <div class="ms-auto">
                        <span><?php echo $count_btvted_year; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped"
                        role="progressbar"
                        style="width: <?php echo $percent_btvted_year; ?>%"
                        aria-valuenow="<?php echo $count_btvted_year; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_datbat_year; ?>% is DATBAT</span>
                      <div class="ms-auto">
                        <span><?php echo $count_datbat_year; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped"
                        role="progressbar"
                        style="width: <?php echo $percent_datbat_year; ?>%"
                        aria-valuenow="<?php echo $count_datbat_year; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <br>
                  <br>



                  <?php } ?>  

              

                </div>
              </div>


                     <!-- card -->
           <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Students Data of Personal Medical History Per Semester</h4>
                  <br>
                
                  <?php
    @include '../models/database_handler.php';
	$query_personal = mysqli_query($conn,"select * from semester") or die(mysqli_error());
	while ($row_personal = mysqli_fetch_array($query_personal)) { 
    $sem_personal = $row_personal['sem_name'];
   
    ?>
                <?php 
								$query_wpersonal_sem = mysqli_query($conn,"select * from health where (semester = '$sem_personal') && (measles = '1' or mumps = '1' or chickenpox = '1' or german_measles = '1' or diphtheria = '1' or pertussis = '1' or tetanus = '1' or otherpersonal = '1') group by student_id")or die(mysqli_error());
								$count_wpersonal_sem = mysqli_num_rows($query_wpersonal_sem);

                $query_wopersonal_sem = mysqli_query($conn,"select * from health where (semester = '$sem_personal') && not (measles = '1' or mumps = '1' or chickenpox = '1' or german_measles = '1' or diphtheria = '1' or pertussis = '1' or tetanus = '1' or otherpersonal = '1') group by student_id")or die(mysqli_error());
								$count_wopersonal_sem = mysqli_num_rows($query_wopersonal_sem);

                
                $total_personal = $count_wpersonal_sem + $count_wopersonal_sem;

                if ($count_wpersonal_sem>1){

                  $percent_wpersonal = round(($count_wpersonal_sem/$total_personal)*100);
                }
                else{
                  $percent_wpersonal = 0;
                }

                if ($count_wopersonal_sem>0){

                  $percent_no_personal = round(($count_wopersonal_sem/$total_personal)*100);
                }
                else{
                  $percent_no_personal = 0;
                }
        
               
								?>

                               
                  <h6><?php echo $sem_personal; ?></h6>
                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_wpersonal; ?>% has Personal Medical History</span>
                      <div class="ms-auto">
                        <span><?php echo $count_wpersonal_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-danger"
                        role="progressbar"
                        style="width: <?php echo $percent_wpersonal; ?>%"
                        aria-valuenow="<?php echo $count_wpersonal_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_no_personal; ?>% doesn't have Personal Medical History</span>
                      <div class="ms-auto">
                        <span><?php echo $count_wopersonal_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-success"
                        role="progressbar"
                        style="width: <?php echo $percent_no_personal; ?>%"
                        aria-valuenow="<?php echo $count_wopersonal_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  

                  <br>





                  <?php } ?>  

              

                </div>
              </div>




              <!-- card -->
           <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Students Data of Immunization Per Semester</h4>
                  <br>
                
                  <?php
    @include '../models/database_handler.php';
	$query_immunization = mysqli_query($conn,"select * from semester") or die(mysqli_error());
	while ($row_immunization = mysqli_fetch_array($query_immunization)) { 
    $sem_immunization = $row_immunization['sem_name'];
   
    ?>
                <?php 
								$query_wvac_sem = mysqli_query($conn,"select * from health where (semester = '$sem_immunization') && (diphteria_vac = '1' or hepa_vac = '1' or flu_vac = '1' or mumps_vac = '1' or covid_vac = '1' or others_vac = '1') group by student_id")or die(mysqli_error());
								$count_wvac_sem = mysqli_num_rows($query_wvac_sem);

                $query_wovac_sem = mysqli_query($conn,"select * from health where (semester = '$sem_immunization') && not (diphteria_vac = '1' or hepa_vac = '1' or flu_vac = '1' or mumps_vac = '1' or covid_vac = '1' or others_vac = '1') group by student_id")or die(mysqli_error());
								$count_wovac_sem = mysqli_num_rows($query_wovac_sem);

                
                $total_vac = $count_wvac_sem + $count_wovac_sem;

                if ($count_wvac_sem>1){

                  $percent_wvac = round(($count_wvac_sem/$total_vac)*100);
                }
                else{
                  $percent_wvac = 0;
                }

                if ($count_wovac_sem>0){

                  $percent_wovac = round(($count_wovac_sem/$total_vac)*100);
                }
                else{
                  $percent_wovac = 0;
                }
        
               
								?>

                               
                  <h6><?php echo $sem_immunization; ?></h6>
                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_wvac; ?>% has Immunization Record</span>
                      <div class="ms-auto">
                        <span><?php echo $count_wvac_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-success"
                        role="progressbar"
                        style="width: <?php echo $percent_wvac; ?>%"
                        aria-valuenow="<?php echo $count_wvac_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  <div>
                    <div class="d-flex no-block align-items-center">
                      <span><?php echo $percent_wovac; ?>% doesn't have Immunization Record</span>
                      <div class="ms-auto">
                        <span><?php echo $count_wovac_sem; ?></span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-danger"
                        role="progressbar"
                        style="width: <?php echo $percent_wovac; ?>%"
                        aria-valuenow="<?php echo $count_wovac_sem; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>

                  

                  <br>





                  <?php } ?>  

              

                </div>
              </div>






              <!-- card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Students with record of Hospitalization Per Semester</h4>
                  <br>


                  <?php
    @include '../models/database_handler.php';
	$query_hospi = mysqli_query($conn,"select * from semester") or die(mysqli_error());
	while ($row_hospi = mysqli_fetch_array($query_hospi)) { 
    $sem_hospi = $row_hospi['sem_name'];
    $values = explode(',',$sem_hospi); 
    $sems =$values[1];
    $sems2=$values[0];
    ?>
                <?php 
								$query_hospi_sem = mysqli_query($conn,"select * from health where (semester = '$sem_hospi') && (hospitalization = 'yes') group by student_id")or die(mysqli_error());
								$count_hospi_sem = mysqli_num_rows($query_hospi_sem);

                $query_no_hospi_sem = mysqli_query($conn,"select * from health where (semester = '$sem_hospi') && (not hospitalization = 'yes') group by student_id")or die(mysqli_error());
								$count_no_hospi_sem = mysqli_num_rows($query_no_hospi_sem);

                $total_hospi = $count_hospi_sem + $count_no_hospi_sem;

                if ($count_hospi_sem>1){

                  $percent_whospi = round(($count_hospi_sem/$total_hospi)*100);
                }
                else{
                  $percent_whospi  = 0;
                }

                if ($count_no_hospi_sem>0){

                  $percent_wohospi = round(($count_no_hospi_sem/$total_hospi)*100);
                }
                else{
                  $percent_wohospi = 0;
                }
               
               
								?>

                  <div id="<?php echo $sems2.$sems; ?>" style="min-width: 550px; height: 400px; margin: 0 auto"></div>
                  <script>
                    $(function () {
    Highcharts.setOptions({
        chart: {
            style:{
                    fontFamily:'Arial, Helvetica, sans-serif', 
                    fontSize: '1em',
                    color:'#f00'
                }
        }
    });
        $('#<?php echo $sems2.$sems; ?>').highcharts({
            chart: {
                type: 'pie'
            },
            colors: [
               '#ED5565',
               '#a6c96a'
               
            ],
            title: {
                text: '<?php echo $sem_hospi; ?>',
                style: {
                  color: '#555'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0,
                backgroundColor: '#FFFFFF'
            },
            xAxis: {
                categories: [
                    'Has Hospitalization Record',
                    'Has no Hospitalization Record'
                   
                ]
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            tooltip: {
                shared: false,
                valueSuffix: ' percent'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.1
                },
            series: {
                groupPadding: .15
            }
            },
            series: [{
            type: 'pie',
            name: 'Student Data',
            data: [
                ['<?php echo $count_hospi_sem; ?> student/s has Hospitalization Record',   <?php echo $percent_whospi; ?>],
                ['<?php echo $count_no_hospi_sem; ?> student/s has no Hospitalization Record',       <?php echo $percent_wohospi; ?>]
               
            ]
            }]
        });
    });
    

//]]> 
                  </script>


<?php } ?> 

                


              </div>
              </div>







               <!-- card -->
               <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Students Under Medication Per Semester</h4>
                  <br>


                  <?php
    @include '../models/database_handler.php';
	$query_under = mysqli_query($conn,"select * from semester") or die(mysqli_error());
	while ($row_under = mysqli_fetch_array($query_under)) { 
    $sem_under = $row_under['sem_name'];
    $values = explode(',',$sem_under); 
    $under_sems =$values[1];
    $under_sems2=$values[0];
    ?>
                <?php 
								$query_under_sem = mysqli_query($conn,"select * from health where (semester = '$sem_under') && (other_disease = 'yes') group by student_id")or die(mysqli_error());
								$count_under_sem = mysqli_num_rows($query_under_sem);

                $query_no_under_sem = mysqli_query($conn,"select * from health where (semester = '$sem_under') && (not other_disease = 'yes') group by student_id")or die(mysqli_error());
								$count_no_under_sem = mysqli_num_rows($query_no_under_sem);

                $under_total = $count_under_sem + $count_no_under_sem;

                if ($count_under_sem>1){

                  $percent_wunder = round(($count_under_sem/$under_total)*100);
                }
                else{
                  $percent_wunder  = 0;
                }

                if ($count_no_under_sem>0){

                  $percent_wounder = round(($count_no_under_sem/$under_total)*100);
                }
                else{
                  $percent_wounder = 0;
                }
               
               
								?>

                  <div id="2<?php echo $under_sems2.$under_sems; ?>" style="min-width: 550px; height: 400px; margin: 0 auto"></div>
                  <script>
                    $(function () {
    Highcharts.setOptions({
        chart: {
            style:{
                    fontFamily:'Arial, Helvetica, sans-serif', 
                    fontSize: '1em',
                    color:'#f00'
                }
        }
    });
        $('#2<?php echo $under_sems2.$under_sems; ?>').highcharts({
            chart: {
                type: 'pie'
            },
            colors: [
               '#AC92EC',
               '#FFCE54'
               
            ],
            title: {
                text: '<?php echo $sem_under; ?>',
                style: {
                  color: '#555'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0,
                backgroundColor: '#FFFFFF'
            },
            xAxis: {
                categories: [
                    'Has Hospitalization Record',
                    'Has no Hospitalization Record'
                   
                ]
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            tooltip: {
                shared: false,
                valueSuffix: ' percent'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.1
                },
            series: {
                groupPadding: .15
            }
            },
            series: [{
            type: 'pie',
            name: 'Student Data',
            data: [
                ['<?php echo $count_under_sem; ?> student/s has disease Under Medication',   <?php echo $percent_wunder; ?>],
                ['<?php echo $count_no_under_sem; ?> student/s without disease Under Medication',       <?php echo $percent_wounder; ?>]
               
            ]
            }]
        });
    });
    

//]]> 
                  </script>


<?php } ?> 

                


              </div>
              </div>



           
                  



          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
        
        </div>


    </div>



    
   













    <?php include('footer.php'); ?>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../dist/js/pages/calendar/cal-init.js"></script>
    




</body>

                  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                  <script src="https://code.highcharts.com/highcharts.js"></script>
                  <script src="https://code.highcharts.com/modules/exporting.js"></script>

                 



