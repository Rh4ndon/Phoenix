<?php 
@include('../controllers/session.php');
@include '../models/dbcon.php';
?>
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

                        <?php
                         $query_notification = mysqli_query($conn,"SELECT * FROM products WHERE quantity = 5 or quantity = 10 ") or die(mysqli_error());
                         $notif_count = mysqli_num_rows($query_notification );
                                             
                        ?>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?= $notif_count ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                        <?php
                         $query_alerts= mysqli_query($conn,"SELECT * FROM products WHERE quantity = 5 or quantity = 10 ") or die(mysqli_error()); 
                         while($row = mysqli_fetch_array($query_alerts)){
                         ?>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold"><?= $row['product_name'] ?> from <?= $row['product_brand'] ?> is running low only has <?= $row['quantity'] ?> on stock</span>
                                    </div>
                                </a>
                                
                        <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href="#"></a>
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





                    <!-- Earnings -->
                    <div class="row">
                   
                    <!-- Earnings (Annual) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Profit</div>
                                                <?php 
                                            
                                                $query_poffline = mysqli_query($conn,"SELECT SUM(profit) as total FROM transactions ") or die(mysqli_error());
                                                $total_poffline = mysqli_fetch_array($query_poffline);
                                                $query_ponline = mysqli_query($conn,"SELECT SUM(price - retail_price) as total FROM orders WHERE status = 'Done'") or die(mysqli_error());
                                                $total_ponline = mysqli_fetch_array($query_ponline);

                                                $total_profit = $total_ponline['total'] + $total_poffline['total'];

                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">&#8369; <?php echo $total_profit;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Product Sold</div>
                                                <?php 
                                                
                                                $query_tproducts = mysqli_query($conn,"SELECT SUM(quantity) as total FROM transactions ") or die(mysqli_error());
                                                $total_product = mysqli_fetch_array($query_tproducts);
                                                $query_tonline = mysqli_query($conn,"SELECT SUM(quantity) as total FROM orders WHERE status = 'Done' ") or die(mysqli_error());
                                                $total_online = mysqli_fetch_array($query_tonline);
                                                $total_sold= $total_product['total'] + $total_online['total'];
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_sold;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Orders</div>
                                                <?php
                                                
	                                            $query_pending = mysqli_query($conn,"select * from orders where status = 'Pending' ") or die(mysqli_error());
	                                            $num_row_pending = mysqli_num_rows($query_pending);
		                                        
		                                        ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_row_pending;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Finished Orders
                                            </div>
                                            <?php
                                                
	                                            $query_done = mysqli_query($conn,"select * from orders where status = 'Done' ") or die(mysqli_error());
	                                            $num_row_done = mysqli_num_rows($query_done);
		                                        
		                                        ?>

                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $num_row_done;?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                     </div>









                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Inventory</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Brand</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                            <?php
                            
	                        $query = mysqli_query($conn,"select * from products ORDER BY id ASC") or die(mysqli_error());
	                        while ($row = mysqli_fetch_array($query)) {
		                    $id = $row['id'];
		                    ?>
                                        <tr>
                                            <td><?php echo $row['product_name']; ?></td>
                                            <td><?php echo $row['product_brand']; ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                      
                                        </tr>
                                    
                                  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Orders -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Online Confirmed Transactions</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Brand</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Profit</th>
                                            <th>Sold To</th>
                                            <th>Date Confirm</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                            <?php
                            
	                        $query2 = mysqli_query($conn,"select * from orders") or die(mysqli_error());
	                        while ($row2 = mysqli_fetch_array($query2)) {
                            $price = $row2['price'];
                            $retail = $row2['retail_price'];
                            $qnt = $row2['quantity'];
                            $profit = ($price - $retail)* $qnt;
                            $stat = $row2['status'];
                            if($stat == 'Done'){

                            
		                    ?>
                                        <tr>
                                            <td><?php echo $row2['product_name']; ?></td>
                                            <td><?php echo $row2['product_brand']; ?></td>
                                            <td><?php echo $row2['quantity']; ?></td>
                                            <td>&#8369; <?php echo $row2['price']; ?></td>
                                            <td>&#8369; <?php echo $profit; ?></td>
                                            <td><?php echo $row2['fname']; ?> <?php echo $row2['lname']; ?></td>
                                            <td><?php echo $row2['day']; ?></td>
                                        </tr>
                                    
                                  <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Sales Transactions</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Brand</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Profit</th>
                                            <th>Sold To</th>
                                            <th>Date of Transaction</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                            <?php
                            
	                        $query2 = mysqli_query($conn,"select * from transactions ORDER BY day DESC") or die(mysqli_error());
	                        while ($row2 = mysqli_fetch_array($query2)) {
		                    $id = $row2['id'];
		                    ?>
                                        <tr>
                                            <td><?php echo $row2['product_name']; ?></td>
                                            <td><?php echo $row2['product_brand']; ?></td>
                                            <td><?php echo $row2['quantity']; ?></td>
                                            <td><?php echo $row2['price']; ?></td>
                                            <td><?php echo $row2['profit']; ?></td>
                                            <td><?php echo $row2['customer']; ?></td>
                                            <td><?php echo $row2['day']; ?></td>
                                        </tr>
                                    
                                  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>





                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Online Users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                            <?php
                            
	                        $query_users = mysqli_query($conn,"select * from user") or die(mysqli_error());
	                        while ($row_users = mysqli_fetch_array($query_users)) {
		                    ?>
                                        <tr>
                                            <td><?php echo $row_users['firstname']; ?> <?php echo $row_users['lastname']; ?></td>
                                         
                                      
                                        </tr>
                                    
                                  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    

    





                    

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