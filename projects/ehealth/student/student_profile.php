<?php include('header.php'); ?>
<?php
										$query = mysqli_query($conn,"select * FROM student 
                    LEFT JOIN health on student.student_id = health.student_id
                    LEFT JOIN str on health.student_id = str.student_id where student.student_id = '$session_id' order by health.semester desc")or die(mysqli_error());
										$row = mysqli_fetch_array($query);
								?>
<body>

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
              <h4 class="page-title">Dashboard</h4>
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
            
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  
                    <div class="p-2">
                      <img
                        src="<?php echo$row['profile']; ?>"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text active w-100">
                      <h6 class="font-medium"><?php echo $row['firstname']; ?> <?php echo$row['lastname']; ?></h6>
                      <span class="mb-3 d-block">
                        Course: <?php echo$row['course']; ?><br>
                        Section: <?php echo$row['year_sec']; ?><br>
                        Age: <?php echo$row['age']; ?><br>
                        Gender: <?php echo$row['gender']; ?><br>
                        Mobile: <?php echo$row['contact']; ?><br>
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end"><?php echo date('F d,Y') ?></span> 
                        <br> 
                        <span id="now" class="text-muted float-end"></span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                          data-bs-toggle="modal" 
                          data-bs-target="#exampleModal"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                          data-bs-toggle="modal" 
                          data-bs-target="#profileModal"
                        >
                          Update Profile
                        </button>
                      
                      </div>
                    </div>

                </div>
              </div>
            </div>

            <div class="row">
            
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Health Form</h5>
                  <div class="form-group-row">
                  <div class="row mb-3">
                  <div class="col-lg-4 ps-0"></div>
                    <div class="col-lg col-md-1 text-end">
                      <span>Last Consultation Date</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                    <input
                        type="date"
                        class="form-control"
                        placeholder="last consult date"
                        value="<?php echo$row['consult_date']; ?>"
                        disabled
                      />
                    </div>

                    <div class="col-lg col-md-1 text-end">
                      <span>Current Semester & School Year</span>
                    </div>
                    <div class="col-lg-2 ps-0">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Semester & School Year"
                        value="<?php echo$row['semester']; ?>"
                        disabled
                      />
                    </div>
                  </div>


                  <div class="row mb-3">

                  
								
                  
                  
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
                        disabled
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
                          disabled
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
                        disabled
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
                        class="form-control"
                        disabled>
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
                          disabled
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
                          disabled
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
                      disabled
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
                        disabled
                      />
                    </div>

                    <div class="col-lg col-md-12 text-end">
                      <span>Address</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                        name="address"
                        type="text"
                        class="form-control"
                        placeholder="Address"
                        value="<?php echo $row['brgy']." ".$row['town']  ; ?>"
                        disabled
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
                        disabled
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
                        disabled
                      />
                    </div>
                    
                    <div class="col-lg col-md-12 text-end">
                      <span>Guardian Address</span>
                    </div>
                    <div class="col-lg-3">
                      <input
                      name="guard"
                        type="text"
                        class="form-control"
                        placeholder="Guardian Address"
                        value="<?php echo$row['guardian_brgy']." ".$row['guardian_town']; ?>"
                        disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                        disabled
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
                          disabled
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
                        disabled
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
                          disabled
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
                        disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                        disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                        disabled
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
                      
                      disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                        disabled
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
                          disabled
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
                          disabled
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
                      disabled
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
                          disabled
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
                          disabled
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
                        disabled
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
                      disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                        disabled
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
                          disabled
                          
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
                          disabled
                          
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
                          disabled
                          
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
                          disabled
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
                          disabled
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
                        disabled
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
                        disabled
                      />
                    </div>

                    </div>




                 

                  

                  </div>
                </div>
              </div>






            
              <div class="row">
	              <div class="col-md-12">
	              <div class="card">
	              <div class="card-body">
	              <h5 class="card-title">School Treatment Form</h5>
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          type="checkbox"
                          class="form-check-input"
                          id="customControlAutosizing3"
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                        disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                          disabled
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
                        disabled
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
                        disabled
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
                          disabled
                        />  
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
                          
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
    @include '../models/database_handler.php';
	$query2 = mysqli_query($conn,"select * from trecord where user_id = $session_id ORDER BY date DESC") or die(mysqli_error());
	while ($row2 = mysqli_fetch_array($query2)) {
		
		?>
                        <tr>
                          <td><?php echo $row2['date']; ?></td>
                          <td><?php echo $row2['complaints']; ?></td>
                          <td><?php echo $row2['diagnosis']; ?></td>
                          <td><?php echo $row2['treatment']; ?></td>
                          <td><?php echo $row2['remarks']; ?></td>
                          <td><?php echo $row2['physician_or_nurse']; ?></td>
                          
                          
                        </tr>
                        <?php } ?>  


                      </tbody>
                    </table>
                    
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



<?php include('footer.php'); ?>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <!-- Form -->
      <div class="modal-body">
      <form method="post" action="../controllers/saveTrecod.php">
      
      <input name="user_id" type="text" class="form-control" value="<?php echo $session_id; ?>" hidden>
      <label>First Name</label>
      <input name="fname" type="text" value="<?php echo $row['firstname']; ?>" class="form-control" placeholder="First name" required>
      <label>Last Name</label>
      <input name="lname" type="text" value="<?php echo $row['lastname']; ?>" class="form-control" placeholder="Last Name" required>
      <label>Age</label>
      <input name="age" type="number" value="<?php echo $row['age']; ?>" class="form-control" placeholder="Mobile Number" required>
      <label>Mobile</label>
      <input name="mobile" type="number" value="<?php echo $row['contact']; ?>" class="form-control" placeholder="Mobile Number" required>
      <label>Course</label>
      <select name="course" type="text" class="form-control" placeholder="Gender" required >
                    <option><?php echo $row['course']; ?></option>
                    <option>BSED</option>
                    <option>BSIT</option>
                    <option>BTVTED</option>
                    <option>DAT-BAT</option>
                    </select>
      <label>Year & Section</label>
      <input name="year_sec" value="<?php echo $row['year_sec']; ?>" type="text" class="form-control" placeholder="Year & Section" required>
      <label>Gender</label>
      <select name="gender" type="text" class="form-control" placeholder="Gender" required >
                    <option><?php echo $row['gender']; ?></option>
                    <option>Male</option>
                    <option>Female</option>
                    </select>
      
      
      </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3 d-grid">
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="editstudent" class="btn btn-primary">Save changes</button>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
        </form>
    </div>
  </div>
</div>



<!-- Profie -->
<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <!-- Form -->
      <div class="modal-body">
      <form method="post" action="../controllers/saveTrecod.php" enctype="multipart/form-data">
      
      <input name="user_id" type="text" class="form-control" value="<?php echo $session_id; ?>" hidden>
      <label>Image</label>
      <input type="file" name="image" class="form-control input-lg"  tabindex="1">
     
      
      </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3 d-grid">
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="changeprofile" class="btn btn-primary">Save changes</button>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
        </form>
    </div>
  </div>
</div>


</body>


<?php include('scripts.php'); ?>
<script>
		$(document).ready(function(){
			setInterval(function(){
				var time = new Date();
				var now = time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true })
				$('#now').html(now)
			},500)
			console.log()			
		})


		
	</script>