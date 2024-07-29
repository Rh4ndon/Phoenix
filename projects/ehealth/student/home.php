<?php include('header.php'); ?>
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
              <h4 class="page-title">Home</h4>
              <div class="ms-auto text-end">
                
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
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Announcement!!!</h5>
                     
                  <?php echo $row['announce']; ?>
                
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
            
            
          </div>
          <?php } ?>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
        
        </div>


    </div>

     




    <?php include('footer.php'); ?>
</body>


<?php include('scripts.php'); ?>
