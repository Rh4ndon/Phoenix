<?php include('session.php'); ?>
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
              <h4 class="page-title">Home </h4>
              
              <div class="ms-auto text-end">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Student
                          </button>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            Add School Year
                          </button>
                          
              </div>
            </div>
          </div>
        </div>
        

        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <?php
                   @include '../controllers/model_conn.php';
	                  $query = mysqli_query($conn,"select * from announcement ORDER BY announce_id DESC") or die(mysqli_error());
	                  while ($row = mysqli_fetch_array($query)) {
		                $id = $row['announce_id'];
		                ?>
          <div class="row">
            
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Announcement!!!</h5>
                  
                       <form method="post" action="../controllers/saveTrecod.php">
                       <input type="text" name="delete_id" value="<?php echo $id; ?>" hidden>

                       <div class="row mb-3">  
                       <div class="col-md-10"><?php echo $row['announce']; ?></div>
                       
                       <div class="col-md-2"><button name="delete_announce" type="submit" class="btn btn-danger" disabled >Delete</button></div>
                       </form>

                      </div>
                      
                       
                          
                            
                          
                        
                       
                  
                </div>
              </div>
            </div>
            
            
          </div>
          <?php } ?> 

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Announcement</h4>


                  <form method="post" id="addAnnounce" >
                  <!-- Create the editor container -->
                  <input name="content" type="hidden">
                  <div id="editor" style="height: 300px"></div>
                  
                  <br>
                  <button type="submit" name="add_announcement" class="btn btn-primary col-lg-2" disabled>Add</button>
                  </form>


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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <!-- Form -->
       <form class="form-horizontal mt-3" method="post" action="../controllers/register_controller.php">
              <div class="row pb-4">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="username"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Username"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>
                  <!-- firstname -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-rename-box fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="firstname"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="First Name"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>

                  <!-- lastname -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-rename-box fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="lastname"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Last Name"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>

                  <!-- age -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-secondary text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-format-list-numbers fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="age"
                      type="number"
                      class="form-control form-control-lg"
                      placeholder="Age"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>

                  <!-- Gender -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-secondary text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-hexagon fs-4"></i
                      ></span>
                    </div>
                    <select
                      name="gender"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Gender"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    >
                    <option>Male</option>
                    <option>Female</option>
                    
                    </select>
                  </div>

                  <!-- year & section -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-secondary text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-group fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="year_sec"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Year & Section"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>

                  <!-- Course -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-secondary text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-hexagon fs-4"></i
                      ></span>
                    </div>
                    <select
                      name="course"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Course"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    >
                    <option>BSED</option>
                    <option>BSIT</option>
                    <option>BTVTED</option>
                    <option>DAT-BAT</option>
                    </select>
                  </div>

                  <!-- cp -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-primary text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-contacts fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="contact"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Contact Number"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>


                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-warning text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="password"
                      type="password"
                      class="form-control form-control-lg"
                      placeholder="Password"
                      aria-label="Password"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>
                  
                </div>
              </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3 d-grid">
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary" disabled>Save changes</button>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
    </div>
  </div>
</div>
     








<!-- Modal3 -->
<div class="modal fade" id="exampleModal3" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add School Year</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         
      </div>
      <div class="modal-body">
        <form method="post" action="../controllers/add_sy.php">
     

            <div class="form-group row">
                      <label
                        for="sy"
                        class="col-sm-3 text-end control-label col-form-label"
                        >School Year</label
                      >
                      <div class="col-sm-9">
                      <input
                         type="number"
                         class="form-control"
                         name="sy_from"
                         id="sy"
                         step="1"
                         max="3000"
                         min="2010"
                        placeholder="From Year"
                       />
                      </div>
                      <label
                        for="sy"
                        class="col-sm-3 text-end control-label col-form-label"
                        >to</label
                      >
                      <div class="col-sm-9">
                      <input
                         type="number"
                         class="form-control"
                         name="sy_to"
                         id="sy"
                         step="1"
                         max="3000"
                         min="2010"
                        placeholder="To Year"
                       />
                      
                      </div>
            </div>

                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button name="save_sem" type="submit" class="btn btn-primary" disabled>Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

     




    <?php include('footer.php'); ?>

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
      


      var quill = new Quill("#editor", {
        theme: "snow",
      });
    

     
      //var form = document.querySelector('form');
$("#addAnnounce").on('submit', function (e) {
e.preventDefault();

    var quillHtml = quill.root.innerHTML.trim();

    var url ="../controllers/quill.php";

    console.log(quillHtml);

    $.ajax({
    type: "POST",
    url : url,
    data: {editorContent : quillHtml },
    success: function (data,status, xhr)
    {
      if(xhr.status == 200) {
        alert("Successfully sent to database");
        location.reload();
      }
    },error: function() {
       alert("Could not send to database");
    }       
});

        
    return false;
});






    </script>



</body>


