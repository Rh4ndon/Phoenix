<?php include('../controllers/session.php')?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Owner</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        @media print{
            @page {
                size: 8in 8in;
                margin: 0mm;
            }
            body  {
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
            .wrapper{
                display: none;
            }
            .navbar-nav{
                display: none;
            }
            .btn {
                display: none;
            }
            .h3{
                display: none;
            }
            .print{
                display: none;
            }
            .sticky-footer{
                display: none;
            }
            #header,
            #footer {
                display: none;
            }
            

            .card{
                align-self: start;
            }
            
        }
       
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="owner_dashboard.php">
                <img src="../img/mm.png" height="200%">
                <div class="sidebar-brand-text mx-3">M&M Motoworkz</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                    <a class="nav-link" href="owner_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                    <a class="nav-link" href="sales.php">
                    <i class="fas fas fa-fw fa-table"></i>
                    <span>Search for Sales</span></a>
            </li>

            <li class="nav-item">
                    <a class="nav-link" href="../../../projects.html">
                    <i class="fas fas fa-fw fa-folder"></i>
                    <span>Rhandon.tech</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    

                       
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Owner Page</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Owner Page</h1>


               
                     <!-- Basic Card Example -->
                     <div class="print card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Search Sales By Date</h6>
                                </div>
                                <div class="card-body">
                                <form method="post">
                                <div class="form-group row">
                                    <div class="col-sm-1">
                                        <label for="from">From</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-control form-control-user" name="from" type="date" required>
                                    </div>
                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-1">
                                        <label for="to">To</label>
                                    </div>
                                
                                    <div class="col-sm-4">
                                        <input class="form-control form-control-user" name="to" type="date" required>
                                    </div>
                                
                            
                                </div>

                                <div class="form-group row"></div>
                                <div class="col-sm-4">
                                <button type="submit" name="search" class="btn btn-primary btn-user btn-block">Search</button>
                                </div>
                                </form>
                                </div>
                    </div>


                    <?php
                    date_default_timezone_set('Asia/Manila');
                    $today = date("m-d-Y");
                    $from = '';
                    $to = '';
                    $total_qty = 0;
                    $total_prc = 0;
                    $total_amount = 0;
                    $total_profit = 0;
                            if (isset($_POST['search'])){
                            @include '../models/dbcon.php';
                            $from = date('m-d-Y',strtotime($_POST['from']));
                            $to = date('m-d-Y',strtotime($_POST['to']));
	                        $query1 = mysqli_query($conn,"SELECT * FROM transactions WHERE day BETWEEN '$from' AND '$to' ") or die(mysqli_error());
	                        $row1 = mysqli_fetch_array($query1);
                            $num_row1 = mysqli_num_rows($query1);

                            if ($num_row1 > 0){

                                $custom = $row1['customer'];
                                $today = $row1['day'];
                                $qty = "SELECT SUM(quantity) AS total_qty FROM transactions WHERE day BETWEEN '$from' AND '$to' ";
                                $prc = "SELECT SUM(price) AS total_prc FROM transactions WHERE day BETWEEN '$from' AND '$to' ";
                                $prft = "SELECT SUM(profit) AS total_prft FROM transactions WHERE day BETWEEN '$from' AND '$to' ";
                                $qty_prc = "SELECT SUM(quantity * price) AS total_amount FROM transactions WHERE day BETWEEN '$from' AND '$to' "; 
                                
                                $res_qty = $conn->query($qty);
                                $res_prc = $conn->query($prc);
                                $res_prft = $conn->query($prft);
                                $res_qty_prc = $conn->query($qty_prc);
                                
                                $row_prft = $res_prft->fetch_assoc();
                                $total_profit = $row_prft['total_prft'];
                                
                                $row_qty_prc = $res_qty_prc->fetch_assoc();
                                $total_amount = $row_qty_prc['total_amount'];
                         
                                $row_qty = $res_qty->fetch_assoc();
                                $total_qty = $row_qty['total_qty'];
                                $row_prc = $res_prc->fetch_assoc();
                                $total_prc = $row_prc['total_prc'];
                              

                            }else{

                                date_default_timezone_set('Asia/Manila');
                                $today = date("m-d-Y");
                                $total_qty = 0;
                                $total_prc = 0;
                                $total_amount = 0;
                                $total_profit = 0;
                            }




                            

                        
                            
                            }?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <center>
                            <img src="../img/mm.png" style="max-height: 80px;">
                            <h6 class="m-0 font-weight-bold text-primary">M&M Motoworkz</h6>
                            <h6 class="m-0 font-weight-bold text-primary">Ganaderia</h6>
                            <h6 class="m-0 font-weight-bold text-primary">Palayan City Nueva Ecija</h6>
                            </center>
                        </div>
                        <div class="card-body">
                        <p style="font-size:20px; float:right;">Printing Date: <?php echo $today; ?></p><br><br>
                        <p style="font-size:20px;">Sales  <u>From: <?php echo $from; ?></u> <u style="font-size:20px; float:right;">To: <?php echo $to; ?></u></p>
                        
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sold to</th>
                                            <th>Qty</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                            <th>Profit</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            if (isset($_POST['search'])){
                            @include '../models/dbcon.php';
                            $from = date('m-d-Y',strtotime($_POST['from']));
                            $to = date('m-d-Y',strtotime($_POST['to']));
	                        $query2 = mysqli_query($conn,"SELECT * FROM transactions WHERE day BETWEEN '$from' AND '$to' ORDER BY day ASC ") or die(mysqli_error());
	                        if (mysqli_num_rows($query2) > 0){

                            
                            foreach ($query2 as $row2) {
                            $price = $row2['price'];
                            $qnt = $row2['quantity'];
                            $amount = $price* $qnt;
                            $profit = $row2['profit'];
		                    ?>
                                        <tr>
                                            <td><?php echo $row2['customer']; ?></td>
                                            <td><?php echo $row2['quantity']; ?></td>
                                            <td><?php echo $row2['product_name']; ?>,  <?php echo $row2['product_brand']; ?></td>
                                            <td>&#8369; <?php echo $row2['price']; ?></td>
                                            <td>&#8369; <?php echo $amount; ?></td>
                                            <td>&#8369; <?php echo $profit; ?></td>
                                            <td><?php echo $row2['day']; ?></td>
                                        </tr>
                                    
                                  <?php }}} ?>

                                        <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th><?php echo $total_qty; ?></th>
                                            <th></th>
                                            <th>&#8369; <?php echo $total_prc; ?></th>
                                            <th>&#8369; <?php echo $total_amount; ?></th>
                                            <th>&#8369; <?php echo $total_profit; ?></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

    
                    <button onclick="window.print()" id="print_button"  class="btn btn-primary">Print</button>




                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ISU San Mateo Student 2023</span>
                    </div>
                </div>
            </footer>
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
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>