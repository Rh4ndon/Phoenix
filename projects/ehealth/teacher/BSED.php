<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<?php include('preloader.php'); ?>
<?php $page='BSED'; ?>
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
            
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $page; ?></h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>Course</th>
                          <th>Year & Section</th>
                          <th>Contact Number</th>
                          <th>
                         
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
    @include '../models/database_handler.php';
	$query = mysqli_query($conn,"select * from student where course = '$page' ORDER BY year_sec && lastname && gender DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['student_id'];
    $course = $row['course'];
		?>
                        <tr>
                          <td><?php echo $row['firstname']; ?></td>
                          <td><?php echo $row['lastname']; ?></td>
                          <td><?php echo $row['gender']; ?></td>
                          <td><?php echo $row['age']; ?></td>
                          <td><?php echo $row['course']; ?></td>
                          <td><?php echo $row['year_sec']; ?></td>
                          <td><?php echo $row['contact']; ?></td>
                          <td>  
                          <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Primary
                      </button>
                      <div class="dropdown-menu">
                      <?php
                      @include '../models/database_handler.php';
	                    $query_sem = mysqli_query($conn,"select * from semester") or die(mysqli_error());
	                    while ($row_sem = mysqli_fetch_array($query_sem)) {
		                  $sem = $row_sem['sem_name'];
		                  ?>
                        <a class="dropdown-item" href="edit.php<?php echo '?course='.$course; ?>&&<?php echo 'id='.$id; ?>&&<?php echo 'sem='.$sem; ?>"><?php echo $sem; ?></a>
                        <?php } ?>                  
                    </div>  
                          
                          </td>
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
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
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
</body>



