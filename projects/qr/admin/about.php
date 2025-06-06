<?php @include '../controllers/session.php'; ?>
<?php @include '../controllers/AdminController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/clock.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php @include 'admin_sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php @include 'admin_topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="row ">


                <div class="col">
                <center>
                <div class="card" style="width: 18rem;">  
                    <img src="../img/jm.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">John Mark V. Corpuz</h5>
                    <p class="card-text">Developer</p>
                    <p class="card-text">corpuzj578@gmail.com</p>
                    

                    <a href="https://www.facebook.com/profile.php?id=100047509812569" class="btn btn-primary">Know More</a>
                   
                    </div>
                    </div>
                    <br>
                    </center>

</div>

<div class="col">

<center>
                    <div class="card" style="width: 18rem;">
                    <img src="../img/andrea.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Andrea Janine R. Gonzales</h5>
                    <p class="card-text">Developer</p>
                    <p class="card-text">gonzalesandreajanine@gmail.com</p>
                    

                    <a href="https://www.facebook.com/andreajanine.roblesgonzales.3" class="btn btn-primary">Know More</a>
                   
                    </div>
                    </div>
                    <br>
</center>

</div>

<div class="col">
<center>

                    <div class="card" style="width: 18rem;">
                    <img src="../img/jennah.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Jennah V. Naguit</h5>
                    <p class="card-text">Developer</p>
                    <p class="card-text">naguitjennah@gmail.com</p>
                    

                    <a href="https://www.facebook.com/jennah.villagarcianaguit" class="btn btn-primary">Know More</a>
                   
                    </div>
                    </div>
                    <br>
</center>

</div>

<div class="col">

<center>
                    <div class="card" style="width: 18rem;">
                    <img src="../img/lloyd.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Lloyd Justine G. Pelayo</h5>
                    <p class="card-text">Developer</p>
                    <p class="card-text">lloydjustinepelayo6@gmail.com</p>
                    

                    <a href="https://www.facebook.com/lloyd.pelayo.1" class="btn btn-primary">Know More</a>
                   
                    </div>
                    </div>
                    <br>

</center>
</div>
                    


                    

                   
                    






                </div>


                </div>

                    

                    

                          

                        



                </div>
                <!-- /.container-fluid -->
               

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php @include 'admin_footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../controllers/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>