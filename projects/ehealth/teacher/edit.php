<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<?php include('preloader.php'); ?>
<!-- Get ID from teachers page of the student being edit -->
<?php 
$get_id = $_GET['id']; 
$get_sem = $_GET['sem'];
$get_course = $_GET['course'];

?>
<?php 
$values = explode(',',$get_sem); 
$school_year =$values[1];
?>
<?php
										$query = mysqli_query($conn,"select * FROM student 
                    LEFT JOIN health on student.student_id = health.student_id
                    LEFT JOIN str on health.student_id = str.student_id where student.student_id = '$get_id' && health.semester = '$get_sem' && str.semester = '$get_sem' ")or die(mysqli_error());
										$row = mysqli_fetch_array($query);
                    $page = $row['course'];
                    $count_row = mysqli_num_rows($query);


                    if ($count_row == 0){
                         //health form
                     mysqli_query($conn,"insert into health (student_id,civil,semester,school_year,consult_date,height,weight,bday,pobirth,brgy,town,father,mother,guardian_brgy,guardian_town,hypertension,diabetes,stroke,asthma,kidney,glaucoma,
                     myopia,hyperopia,cataract,harelip,cancer,cancer_spec,allergy,allergy_spec,othersfamed,otherfamed_spec,measles,mumps,chickenpox,german_measles,diphtheria,pertussis,tetanus,otherpersonal,otherspersonal_spec,diphteria_vac,
                     hepa_vac,flu_vac,mumps_vac,covid_vac,others_vac,others_vac_spec,mens_period,mens_days,dysmenorhea,hospitalization,hospi_diagnos,pierced,pierced_whens,
                     tattoo,tattoo_where,tattoo_when,smoke,stick_day,alcohol,brand,alcohol_often,other_disease,other_diagnos,other_treat)
                     values ('$get_id','','$get_sem','$school_year','','','','','','','','','','','','',
                     '','','','','','','','','','','','','','','','','','','','','','','','','',
                     '','','','','','','','','','','','','','','','','','','','','','','','')") or die(mysqli_error()); 

                    //school treatment record
                     mysqli_query($conn,"insert into str (student_id,semester,strhypertension,strdiabetes,strcardio,strptb,strhyperacid,strallergy,strepilepsy,strasthma,strdysmenorrhea,strliver,struti,strothers,strothers_spec,pebp,pepr,prheent,pechest,peheart,pelungs,peabdomen,pegenitalia,peextrem,peskin,peneurology,peother_disease,pediagnos,petreatment,peremarks)
                     values ('$get_id','$get_sem','','','','','','','','','','','','','','','','','','','','','','','','','','','','')") or die(mysqli_error()); 
                     
                     echo "<script>
                     window.location = 'edit.php?course=$get_course&&id=$get_id&&sem=$get_sem';
                     </script>";

                    }
                    
								?>


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
              <h4 class="page-title"><?php echo $page; ?></h4>
              <div class="ms-auto text-end">
                
              </div>
            </div>
          </div>
        </div>
        

        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->

          <div class="row">
            
          </div>





           <!-- Health from start-->
          <form method="post" action="../controllers/saveTrecod.php">
          <div class="row">
            
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Health Form</h5>
                  <div class="form-group-row">

                  <div class="row mb-3">

                    <div class="col-lg col-md-1 text-end">
                      <span>Date of Consultation</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                    <input
                        name="consult_date"
                        type="date"
                        class="form-control"
                        placeholder="Consultation Date"
                        value="<?php echo$row['consult_date']; ?>"
                     
                      />
                    </div>

                    <div class="col-lg col-md-1 text-end">
                      <span>Semester</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                    
                      <input
                        name=""
                        type="text"
                        class="form-control"
                        placeholder="Semester"
                        value="<?php echo$row['semester']; ?>"
                        disabled
                      />
                      <input
                        name="sem"
                        type="text"
                        class="form-control"
                        placeholder="Consultation Date"
                        value="<?php echo$get_sem; ?>"
                        hidden
                      />
                    </div>

                    <div class="col-lg col-md-1 text-end">
                      <span>School Year</span>
                    </div>

                    
                    <div class="col-lg-2 ps-0">
                      
                    
                      <input
                        name=""
                        type="text"
                        class="form-control"
                        placeholder="School Year"
                        value="<?php echo$school_year; ?>"
                        disabled
                      />
                      <input
                        name="school_y"
                        type="text"
                        class="form-control"
                        placeholder="Consultation Date"
                        value="<?php echo$values[1]; ?>"
                        hidden
                      />
                    </div>
                    

                    

                     <a href="<?php echo$row['course']; ?>.php" type="button" class="btn btn-primary col-lg-1">
                        Back
                      </a>

                   

                  </div>

                     
                      




                  <div class="row mb-3">

                  <input type="text" name="page" value="<?php echo $page; ?>" hidden>
                  <input type="text" name="get_id" value="<?php echo $get_id; ?>" hidden>
                  
                  <div class="col-lg col-md-1 text-end">
                      <span>First Name</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="First Name"
                        value="<?php echo$row['firstname']; ?>"
                        disabled
                      />
                    </div>

                    <div class="col-lg col-md-1 text-end">
                      <span>Last Name</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Last Name"
                        value="<?php echo$row['lastname']; ?>"
                        disabled
                      />
                    </div>

                    <div class="col-lg col-md-1 text-end">
                      <span>CP No.</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                    <input
                        name="cp"
                        type="text"
                        class="form-control"
                        placeholder="Last Name"
                        value="<?php echo$row['contact']; ?>"
                        
                      />
                    </div>
                    
                    

                    


                  </div>

                  
                  <div class="row mb-3">


                    <div class="col-lg col-md-12 text-end">
                      <span>Age</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                    <div class="input-group">
                        <input
                          name="age"
                          type="number"
                          class="form-control"
                          placeholder="age"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                          value="<?php echo$row['age']; ?>"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"
                            >y/o</span
                          >
                        </div>
                      </div>
                    </div>


                    <div class="col-lg col-md-12 text-end">
                      <span>Gender</span>
                    </div>
                    <div class="col-lg-1 ps-0">
                      <select
                         name="gender"
                        type="text"
                        class="form-control"
                        placeholder="Gender"
                      >
                      <option><?php echo$row['gender']; ?></option>
                      <option>Male</option>
                      <option>Female</option>
                      </select>
                    </div>


                    <div class="col-lg col-md-12 text-end">
                      <span>Civil Status</span>
                    </div>
                    <div class="col-lg-1 ps-0">
                      <select
                        name="civil"
                        type="text"
                        class="form-control">
                      <option><?php echo$row['civil']; ?></option>
                      <option>Single</option>
                      <option>Married</option>
                      <option>Widowed</option>
                      <option>Divorced</option>
                      </select>
                    </div>


                    <div class="col-lg col-md-12 text-end">
                      <span>Height</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                      <div class="input-group">
                        <input
                          name="height"
                          type="text"
                          class="form-control"
                          placeholder="height"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                          value="<?php echo$row['height']; ?>"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"
                            >cm</span
                          >
                        </div>
                      </div>
                    </div>


                    <div class="col-lg col-md-12 text-end">
                      <span>Weight</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                      <div class="input-group">
                        <input
                          name="weight"
                          type="text"
                          class="form-control"
                          placeholder="weight"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                          value="<?php echo$row['weight']; ?>"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"
                            >kg</span
                          >
                        </div>
                      </div>
                    </div>

                    
                    
                  </div>

                  <div class="row mb-3">
                  
                    <div class="col-lg col-md-12 text-end">
                      <span>Birthday</span>
                    </div>
                    <div class="col-lg-2 col-md-12">
                    
                    <input
                      name="bday"
                      type="date"
                      class="form-control"
                      placeholder="mm/dd/yyyy"
                      value="<?php echo$row['bday']; ?>"
                    />
                    
                    </div>


                    <div class="col-lg col-md-12 text-end">
                      <span>Place of Birth</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                        name="pob"
                        type="text"
                        class="form-control"
                        placeholder="Place of Birth"
                        value="<?php echo$row['pobirth']; ?>"
                      />
                    </div>

                    <div class="col-lg col-md-12 text-end">
                      <span>Address</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                        name="brgy"
                        type="text"
                        class="form-control"
                        placeholder="Barangay"
                        value="<?php echo$row['town']; ?>"
                      />
                      <input
                        name="town"
                        type="text"
                        class="form-control"
                        placeholder="Town"
                        value="<?php echo$row['brgy']; ?>"
                      />

                    </div>
                  </div>


                  <div class="row mb-3">

                  <div class="col-lg col-md-12 text-end">
                      <span>Father</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                        name="father"
                        type="text"
                        class="form-control"
                        placeholder="Father"
                        value="<?php echo$row['father']; ?>"
                      />
                    </div>

                    <div class="col-lg col-md-12 text-end">
                      <span>Mother</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                      name="mother"
                        type="text"
                        class="form-control"
                        placeholder="Mother"
                        value="<?php echo$row['mother']; ?>"
                      />
                    </div>
                    
                    <div class="col-lg col-md-12 text-end">
                      <span>Guardian Address</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                      name="guard_brgy"
                        type="text"
                        class="form-control"
                        placeholder="Guardian Barangay"
                        value="<?php echo$row['guardian_brgy']; ?>"
                      />
                      <input
                      name="guard_town"
                        type="text"
                        class="form-control"
                        placeholder="Guardian Town"
                        value="<?php echo$row['guardian_town']; ?>"
                      />
                    </div>
                  </div>

                  
                  <div class="row mb-3">
	                <div class="col-md-6">
                    <h5 class="card-title">Family Medical History</h5>
                      <div class="form-check mr-sm-2">
                        <input
                        name="hypertension"
                          value="1"
                          type="checkbox"
                          <?php if($row['hypertension'] == '1'){ echo 'checked'; }?>
                          class="form-check-input"
                          id="customControlAutosizing1"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing1"
                          >Hypertension</label
                        >
                      </div>
                      <div class="form-check mr-sm-2">
                        <input
                          name="diabetes"
                          value="1"
                          type="checkbox"
                          <?php if($row['diabetes'] == '1'){ echo 'checked'; }?>
                          class="form-check-input"
                          id="customControlAutosizing2"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing2"
                          >Diabetes Mellitus</label
                        >
                      </div>
                      <div class="form-check mr-sm-2">
                        <input
                        name="stroke"
                          value="1"
                          type="checkbox"
                          <?php if($row['stroke'] == '1'){ echo 'checked'; }?>
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Stroke/CVA</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="asthma"
                          value="1"
                          type="checkbox"
                          <?php if($row['asthma'] == '1'){ echo 'checked'; }?>
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Asthma</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="kidney"
                          value="1"
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                          <?php if($row['kidney'] == '1'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Kidney Disease</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="glaucoma"
                          value="1"
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                          <?php if($row['glaucoma'] == '1'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Glaucoma</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="myopia"
                          value="1"
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                          <?php if($row['myopia'] == '1'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Myopia</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="hyperopia"
                          value="1"
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                          <?php if($row['hyperopia'] == '1'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Hyperopia</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="cataract"
                          value="1"
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                          <?php if($row['cataract'] == '1'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Cataract</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="harelip"
                          value="1"
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                          <?php if($row['harelip'] == '1'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Harelip</label
                        >
                      </div>
  
  
                      </div>


                      <div class="col-md-6">
                        <br><br>
                      <div class="form-check mr-sm-2">
                        <input
                        name="cancer"
                          value="1"
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                          <?php if($row['cancer'] == '1'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Cancer</label
                        >
                      </div>

                      <div class="row">
                      <div class="col-md-4 text-start">
                      <span>Cancer Specification</span>
                      </div>
                      <div class="col-lg-4">
                        <input
                        name="cancerspec"
                        value="<?php echo $row['cancer_spec'];?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                        />
                      </div>
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="allergy"
                          value="1"
                          <?php if($row['allergy'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Allergy</label
                        >                    
                        
                      </div>

                      <div class="row">
                      <div class="col-md-4 text-start">
                      <span>Allergy Specification</span>
                      </div>
                      <div class="col-lg-4">
                        <input
                        name="allergyspec"
                        value="<?php echo $row['allergy_spec'];?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                        />
                      </div>
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="otherfamed"
                          value="1"
                          <?php if($row['othersfamed'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Others</label
                        >                    
                        
                      </div>

                      <div class="row">
                      <div class="col-md-4 text-start">
                      <span>Others Specification</span>
                      </div>
                      <div class="col-lg-4">
                        <input
                        name="otherfamedspec"
                        value="<?php echo $row['otherfamed_spec'];?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                        />
                      </div>
                      </div>

                    </div>

		          
          </div>
                    
                  

          <div class="row mb-3">
	        <div class="col-md-6">
                    <h5 class="card-title">Personal Medical History</h5>
                    <h8 class="card-title">Have you ever have any childhood disease? </h8>
                      <div class="form-check mr-sm-2">
                        <input
                        name="measles"
                          value="1"
                          <?php if($row['measles'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing1"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing1"
                          >Measles</label
                        >
                      </div>
                      <div class="form-check mr-sm-2">
                        <input
                        name="mumps"
                          value="1"
                          <?php if($row['mumps'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing2"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing2"
                          >Mumps</label
                        >
                      </div>
                      <div class="form-check mr-sm-2">
                        <input
                        name="chickenpox"
                          value="1"
                          <?php if($row['chickenpox'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Chicken Pox</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="germanmeasles"
                          value="1"
                          <?php if($row['german_measles'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >German Measles</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="diphtheria"
                          value="1"
                          <?php if($row['diphtheria'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Diphtheria</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="pertussis"
                          value="1"
                          <?php if($row['pertussis'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Pertussis</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="tetanus"
                          value="1"
                          <?php if($row['tetanus'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Tetanus</label
                        >
                      </div>



                      <div class="form-check mr-sm-2">
                        <input
                        name="otherpersonal"
                          value="1"
                          <?php if($row['otherpersonal'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Others</label
                        >                    
                        
                      </div>

                      <div class="row">
                      <div class="col-md-4 text-start">
                      <span>Others Specification</span>
                      </div>
                      <div class="col-lg-4">
                        <input
                        name="otherpersonalspec"
                        value="<?php echo $row['otherspersonal_spec'];?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                        />
                      </div>
                      </div>

                      


                      

                    </div>

		            <div class="col-md-6">
                  <br>
                <h8 class="card-title">Have you had immunization? </h8>

                <div class="form-check mr-sm-2">
                        <input
                        name="diphteriavac"
                          value="1"
                          <?php if($row['diphteria_vac'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing1"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing1"
                          >Diphtheria, Tetanus, Pertussis</label
                        >
                      </div>
                      <div class="form-check mr-sm-2">
                        <input
                        name="hepa_vac"
                          value="1"
                          <?php if($row['hepa_vac'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing2"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing2"
                          >Hepatitis A/B</label
                        >
                      </div>
                      <div class="form-check mr-sm-2">
                        <input
                        name="fluvac"
                          value="1"
                          <?php if($row['flu_vac'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Flu Vaccine</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="mumpsvac"
                          value="1"
                          <?php if($row['mumps_vac'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Mumps, Measles, Rubella</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="covidvac"
                          value="1"
                          <?php if($row['covid_vac'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Covid-19 Vaccine</label
                        >
                      </div>

                    
                      <div class="form-check mr-sm-2">
                        <input
                        name="othersvac"
                          value="1"
                          <?php if($row['others_vac'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Others</label
                        >                    
                        
                      </div>

                      <div class="row">
                      <div class="col-md-4 text-start">
                      <span>Others Specification</span>
                      </div>
                      <div class="col-lg-4">
                        <input
                        name="othervacspec"
                        value="<?php echo $row['others_vac_spec'];?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                        />
                      </div>
                      </div>

                </div>
            </div>

             


                    <div class="row mb-3">
                   
                    <div class="col-lg col-md-3 text-end">
                      <span>For Female Only:Last Menstruation Period</span>
                    </div>
                    <div class="col-lg-2 col-md-12">
                    <div class="input-group">
                    <input
                      name="mensperiod"
                      value="<?php echo $row['mens_period'];?>"
                      type="date"
                      class="form-control"
                      id="datepicker-autoclose"
                      placeholder="mm/dd/yyyy"
                      <?php if($row['gender'] == 'Male'){ echo 'disabled'; }?>
                    />
                    </div>
                    </div>


                    <div class="col-lg col-md-1 text-end">
                      <span>Duration on Menses</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                      <div class="input-group">
                        <input
                          name="mensdays"
                          value="<?php echo $row['mens_days'];?>"
                          type="text"
                          class="form-control"
                          placeholder="No of days"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                          <?php if($row['gender'] == 'Male'){ echo 'disabled'; }?>
                        />
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"
                            >days</span
                          >
                        </div>
                      </div>
                    </div>


                    <div class="col-lg col-md-12 text-end">
                      <span>Dysmenorrhea</span>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-check">
                        <input
                          name="dismeno"
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          value="yes"
                          <?php if($row['gender'] == 'Male'){ echo 'disabled'; }?>
                          <?php if($row['dysmenorhea'] == 'yes'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                          name="dismeno"
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          value="no"
                          <?php if($row['gender'] == 'Male'){ echo 'disabled'; }?>
                          <?php if($row['dysmenorhea'] == 'no'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >No</label
                        >
                      </div>
                    </div>

                    </div>

                    


                    <div class="row mb-3">

                    <div class="col-lg-4 col-md-12 text-end">
                      <span>Have you ever had any hospitalization history? </span>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-check">
                        <input
                          name="hospi"
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          value="yes"
                          <?php if($row['hospitalization'] == 'yes'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                          name="hospi"
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          value="no"
                          <?php if($row['hospitalization'] == 'no'){ echo 'checked'; }?>
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >No</label
                        >
                      </div>
                    </div>

                    <div class="col-lg-1 col-md-2 text-end">
                      <span>Diagnosis</span>
                    </div>
                    <div class="col-lg-5">
                      <input
                         name="hospidiagnos"
                        type="text"
                        class="form-control"
                        placeholder="Diagnosis"
                        value="<?php echo $row['hospi_diagnos']; ?>"
                      />
                    </div>

                    </div>

                    <div class="row mb-3">


                    <div class="col-lg-4 col-md-12 text-end">
                      <span>Do you have ear pierced? </span>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-check">
                        <input
                          name="peirce"
                          value="yes"
                          <?php if($row['pierced'] == 'yes'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                          name="peirce"
                          value="no"
                          <?php if($row['pierced'] == 'no'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >No</label
                        >
                      </div>
                    </div>

                    <div class="col-lg-1 col-md-2 text-end">
                      <span>When?</span>
                    </div>
                    <div class="col-lg-5 col-md-12">
                    <div class="input-group">
                    <input
                    name="piercedwhen"
                      value="<?php echo $row['pierced_whens']; ?>"
                      type="date"
                      class="form-control"
                      id="datepicker-autoclose"
                      placeholder="mm/dd/yyyy"
                    />
                    </div>
                    </div>


                    </div>

                    <div class="row mb-3">


                    <div class="col-lg-3 col-md-12 text-end">
                      <span>Do you have any tattoo? </span>
                    </div>
                    <div class="col-lg-1">
                      <div class="form-check">
                        <input
                        name="tattoo"
                          value="yes"
                          <?php if($row['tattoo'] == 'yes'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                        name="tattoo"
                          value="no"
                          <?php if($row['tattoo'] == 'no'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >No</label
                        >
                      </div>
                    </div>

                    <div class="col-lg-1 col-md-1 text-end">
                      <span>Where?</span>
                    </div>
                    <div class="col-lg-2">
                      <input
                      name="tattoowhere"
                      value="<?php echo $row['tattoo_where']; ?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                      />
                    </div>

                    <div class="col-lg-1 col-md-1 text-end">
                      <span>When?</span>
                    </div>
                    <div class="col-lg-2 col-md-12">
                    <div class="input-group">
                    <input
                    name="tattoowhen"
                      value="<?php echo $row['tattoo_when']; ?>"
                      type="date"
                      class="form-control"
                      id="datepicker-autoclose"
                      placeholder="mm/dd/yyyy"
                    />
                    </div>
                    </div>

                    </div>

                    <div class="row mb-3">


                    <div class="col-lg-4 col-md-12 text-end">
                      <span>Do you smoke? </span>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-check">
                        <input
                        name="smoke"
                          value="yes"
                          <?php if($row['smoke'] == 'yes'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                        name="smoke"
                          value="no"
                          <?php if($row['smoke'] == 'no'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >No</label
                        >
                      </div>
                    </div>


                    <div class="col-lg-1 col-md-1 text-end">
                      <span>Sticks/day</span>
                    </div>
                    <div class="col-lg-5 ps-0">
                      <div class="input-group">
                        <input
                        name="stickpd"
                          value="<?php echo $row['stick_day']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="No of days"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"
                            >stick/s</span
                          >
                        </div>
                      </div>
                    </div>

                    </div>

                    <div class="row mb-3">


                    <div class="col-lg col-md-12 text-end">
                      <span>Do you drink alcohol? </span>
                    </div>
                    <div class="col-lg-1">
                      <div class="form-check">
                        <input
                        name="alcohol"
                          value="yes"
                          <?php if($row['alcohol'] == 'no'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                        name="alcohol"
                          value="no"
                          <?php if($row['alcohol'] == 'no'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >No</label
                        >
                      </div>
                    </div>

                    <div class="col-lg col-md-1 text-end">
                      <span>Brand</span>
                    </div>
                    <div class="col-lg-2">
                      <input
                      name="brand"
                          value="<?php echo $row['brand']; ?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                      />
                    </div>


                    <div class="col-lg col-md-12 text-end">
                      <span>How Often? </span>
                    </div>
                    <div class="col-lg-3">
                    
                        <div class="form-check">
                        <input
                        name="often"
                          value="not"
                          <?php if($row['alcohol_often'] == 'not'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Not drinking</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                        name="often"
                          value="occasional"
                          <?php if($row['alcohol_often'] == 'occasional'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Occasionally</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                        name="often"
                          value="mostly"
                          <?php if($row['alcohol_often'] == 'mostly'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Mostly</label
                        >
                      </div>
                    </div>

                    </div>


                    <div class="row mb-3">


                    <div class="col-lg col-md-12 text-end">
                      <span>Do you have any other disease which you are under medication at present? </span>
                    </div>
                    <div class="col-lg-1">
                      <div class="form-check">
                        <input
                        name="otherdisease"
                          value="yes"
                          <?php if($row['other_disease'] == 'yes'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                        name="otherdisease"
                          value="no"
                          <?php if($row['other_disease'] == 'no'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >No</label
                        >
                      </div>
                    </div>

                    <div class="col-lg col-md-12 text-end">
                      <span>Diagnosis</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                      name="otherdiag"
                        value="<?php echo $row['other_diagnos']; ?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                      />
                    </div>

                    <div class="col-lg col-md-12 text-end">
                      <span>Treatment</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                      name="othertreat"
                        value="<?php echo $row['other_treat']; ?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                      />
                    </div>

                    </div>




                 

                  <div class="border-top">
                    <div class="card-body">
                      <button type="submit" name="health"class="btn btn-primary">
                        Update
                      </button>
                    </div>
                  </div>

                  </div>
                </div>
              </div>

          
          </form>
          <!-- /Health from close here-->















































<!-- School treatment record form starts hear-->

<form method="post" action="../controllers/saveTrecod.php">
<input
                        name="sem"
                        type="text"
                        class="form-control"
                        placeholder="Consultation Date"
                        value="<?php echo$get_sem; ?>"
                        hidden
                      />

<input type="text" name="page" value="<?php echo $page; ?>" hidden>
<input type="text" name="get_id" value="<?php echo $get_id; ?>" hidden>
              <div class="row">
	              <div class="col-md-12">
	              <div class="card">
	              <div class="card-body">
	              <h5 class="card-title">School Treatment Record</h5>
	              <div class="form-group-row">
                  
	              <div class="form-group row">

                  <label class="col-md-3">Past Medical History</label>
                    <div class="col-md-9">
                      <div class="form-check mr-sm-2">
                        <input
                        name="strhypertension"
                          value="1"
                          <?php if($row['strhypertension'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing1"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing1"
                          >Hypertension</label
                        >
                      </div>
                      <div class="form-check mr-sm-2">
                        <input
                        name="strdiabetes"
                          value="1"
                          <?php if($row['strdiabetes'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing2"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing2"
                          >Diabetes</label
                        >
                      </div>
                      <div class="form-check mr-sm-2">
                        <input
                        name="strcardio"
                          value="1"
                          <?php if($row['strcardio'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Cardiovascular(Heart) Disease</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="strptb"
                          value="1"
                          <?php if($row['strptb'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >PTB</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="strhyperacid"
                          value="1"
                          <?php if($row['strhyperacid'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Hyperacidity</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="strallergy"
                          value="1"
                          <?php if($row['strallergy'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Allergy</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="strepilepsy"
                          value="1"
                          <?php if($row['strepilepsy'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Epilepsy</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="strasthma"
                          value="1"
                          <?php if($row['strasthma'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Asthma</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="strdysmenorrhea"
                          value="<?php if($row['gender'] == 'Female'){ echo '1'; }else{echo '0';}?>"
                          <?php if($row['strdysmenorrhea'] == '1'){ echo 'checked'; }?>
                          <?php if($row['gender'] == 'Male'){ echo 'disabled'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Dysmenorrhea</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="strliver"
                          value="1"
                          <?php if($row['strliver'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Liver/Gall bladder Disease</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="struti"
                          value="1"
                          <?php if($row['struti'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >UTI</label
                        >
                      </div>

                      <div class="form-check mr-sm-2">
                        <input
                        name="strothers"
                          value="1"
                          <?php if($row['strothers'] == '1'){ echo 'checked'; }?>
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlAutosizing3"
                          >Others</label
                        >
                      </div>

                      <div class="row">
                      <div class="col-md-1 text-start">
                      <span>Others</span>
                      </div>
                      <div class="col-lg-2">
                        <input
                        name="strothers_spec"
                        value="<?php echo $row['strothers_spec']; ?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                        />
                      </div>
                      </div>



                    </div>

                    <div class="row mb-3">
                    </div>
                    <div class="row mb-3">
                    </div>

                    <div class="form-group row">
	                      <label class="col-md-3">Physical Examination</label>
	                      <div class="col-md-9">

                    <div class="row mb-3">
                    <div class="col-lg-1 col-md-1 text-end">
                      <span>Height</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                      <div class="input-group">
                        <input
                        value="<?php echo $row['height']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="height"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                          disabled
                        />
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"
                            >cm</span
                          >
                        </div>
                      </div>
                    </div>
                    

                    
                    <div class="col-lg-1 col-md-1 text-end">
                      <span>Weight</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                      <div class="input-group">
                        <input
                        value="<?php echo $row['weight']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="weight"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                          disabled
                        />
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"
                            >kg</span
                          >
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-1 col-md-1 text-end">
                      <span>BP</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="pebp"
                        value="<?php echo $row['pebp']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Blood Pressure"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    <div class="col-lg-1 col-md-1 text-end">
                      <span>PR</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="pepr"
                        value="<?php echo $row['pepr']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="PR"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    
                    

                    </div>

                    <div class="row mb-3">

                    <div class="col-lg-1 col-md-1 text-end">
                      <span>HEENT</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="prheent"
                        value="<?php echo $row['prheent']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="HEENT"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    <div class="col-lg-1 col-md-1 text-end">
                      <span>Chest/ Breast</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="pechest"
                        value="<?php echo $row['pechest']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Chest/Breast"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    <div class="col-lg-1 col-md-1 text-end">
                      <span>Heart</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="peheart"
                        value="<?php echo $row['peheart']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Heart"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    <div class="col-lg-1 col-md-1 text-end">
                      <span>Lungs</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="pelungs"
                        value="<?php echo $row['pelungs']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Lungs"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>              

                    </div>

                    <div class="row mb-3">

                    <div class="col-lg-2 col-md-1 text-end">
                      <span> Abdomen</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="peabdomen"
                        value="<?php echo $row['peabdomen']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Abdomen"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    <div class="col-lg-2 col-md-1 text-end">
                      <span>Genitalia/ Rectal</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="pegenitalia"
                        value="<?php echo $row['pegenitalia']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Genitalia/ Rectal"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    <div class="col-lg-2 col-md-1 text-end">
                      <span>Extremities</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="peextrem"
                        value="<?php echo $row['peextrem']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Extremities"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>
                      
                    </div>

                    <div class="row mb-3">

                    <div class="col-lg-2 col-md-1 text-end">
                      <span>Skin</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="peskin"
                        value="<?php echo $row['peskin']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Skin"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    <div class="col-lg-2 col-md-1 text-end">
                      <span>Neurology</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="peneurology"
                        value="<?php echo $row['peneurology']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Neurology"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>

                    </div>

                    <div class="row mb-3">

                    <div class="col-lg col-md-12 text-end">
                      <span>Do you have any other disease which you are under medication at present? </span>
                    </div>
                    <div class="col-lg-1">
                      <div class="form-check">
                        <input
                        name="peother_disease"
                          value="yes"
                          <?php if($row['peother_disease'] == 'yes'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check">
                        <input
                        name="peother_disease"
                          value="no"
                          <?php if($row['peother_disease'] == 'no'){ echo 'checked'; }?>
                          type="radio"
                          class="form-check-input"
                          id="customControlValidation1"
                          name="radio-stacked"
                          required
                        />
                        <label
                          class="form-check-label mb-0"
                          for="customControlValidation1"
                          >No</label
                        >
                      </div>
                    </div>

                    <div class="col-lg col-md-12 text-end">
                      <span>Diagnosis</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                      name="pediagnos"
                        value="<?php echo $row['pediagnos']; ?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                      />
                    </div>

                    <div class="col-lg col-md-12 text-end">
                      <span>Treatment</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                      name="petreatment"
                        value="<?php echo $row['petreatment']; ?>"
                        type="text"
                        class="form-control"
                        placeholder="Specify"
                      />
                    </div>

                    </div>

                    <div class="row mb-3">
                      

                    <div class="col-lg-2 col-md-1 text-end">
                      <span>Remarks</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <input
                        name="peremarks"
                        value="<?php echo $row['peremarks']; ?>"
                          type="text"
                          class="form-control"
                          placeholder="Remarks"
                          aria-label="Recipient 's username"
                          aria-describedby="basic-addon2"
                        />  
                    </div>


                    </div>
 
	                        </div>
                    </div>
                  
                </div>

                


                
                
                <div class="border-top">
                    <div class="card-body">
                      <button name="strupdate"type="submit" class="btn btn-primary">
                        Update
                      </button>
                    </div>
                  </div>

                  

	              </div>
	              </div>
	              </div>
	              </div>
             </div> 
             

</form>
<!-- School treatment record form ends hear-->

             

          <!-- Treatment Records -->

             <div class="row">
            
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">School Treatment Records</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Complaints</th>
                          <th>Diagnosis</th>
                          <th>Treatment</th>
                          <th>Remarks</th>
                          <th>Physician or Nurse</th>
                          <th></th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
    @include '../models/database_handler.php';
	$query = mysqli_query($conn,"select * from trecord where user_id = $get_id ORDER BY date DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['trecord_id'];
		?>
                        <tr>
                          <td><?php echo $row['date']; ?></td>
                          <td><?php echo $row['complaints']; ?></td>
                          <td><?php echo $row['diagnosis']; ?></td>
                          <td><?php echo $row['treatment']; ?></td>
                          <td><?php echo $row['remarks']; ?></td>
                          <td><?php echo $row['physician_or_nurse']; ?></td>
                          <td>
                            <form method="post" action="../controllers/saveTrecod.php">
                              <input type="text" name="delete_id" value="<?php echo $id; ?>" hidden>
                              <input type="text" name="page" value="<?php echo $page; ?>" hidden>
                              <input type="text" name="get_id" value="<?php echo $get_id; ?>" hidden>
                            <button name="delete" type="submit" class="btn btn-danger">Delete</button></td>
                            </form>
                          
                        </tr>
                        <?php } ?>  


                      </tbody>
                    </table>
                    <div class="border-top">
                    <div class="card-body">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add
                      </button>
                      
                     
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>






             

            </div>
          </div>
        </div>



                      


            


            
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
        
        </div>


    </div>

     

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Treatment Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="../controllers/saveTrecod.php">
      <div class="modal-body">
      <label>Date</label>
      <input name="date" type="date" class="form-control" placeholder="Date" required>
      <label>Complaints</label>
      <input name="complaints" type="text" class="form-control" placeholder="Complaints" required>
      <label>Diagnosis</label>
      <input name="diagnosis" type="text" class="form-control" placeholder="Diagnosis" required>
      <label>Treatment</label>
      <input name="treatment" type="text" class="form-control" placeholder="Treatment" required>
      <label>Remarks</label>
      <input name="remarks" type="text" class="form-control" placeholder="Remarks" required>
      
      <?php
								$query = mysqli_query($conn,"select * from student where student_id = '$get_id'")or die(mysqli_error());
								$row  = mysqli_fetch_array($query);
								
								?>
      <input name="user_id" type="text" class="form-control" value="<?php echo $row['student_id']; ?>" hidden required>
      <input name="username" type="text" class="form-control" value="<?php echo $row['username']; ?>" hidden required>
      <input name="course" type="text" class="form-control" value="<?php echo $row['course']; ?>" hidden required>
      <?php
								$query2 = mysqli_query($conn,"select * from teacher where teacher_id = '$session_id'")or die(mysqli_error());
								$row2  = mysqli_fetch_array($query2);
								
								?>
      <input name="physician" type="text" class="form-control" value="<?php echo $row2['firstname']; ?> <?php echo $row2['lastname']; ?>" hidden required>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary" disabled>Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


    <?php include('footer.php'); ?>
</body>


<?php include('scripts.php'); ?>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
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
    <!-- This Page JS -->
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/mask/mask.init.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script>
      //***********************************//
      // For select 2
      //***********************************//
      $(".select2").select2();

      /*colorpicker*/
      $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>