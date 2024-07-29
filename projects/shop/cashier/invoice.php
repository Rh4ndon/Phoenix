<?php include('../controllers/session.php')?>
<?php include('../controllers/find.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cashier</title>

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
                <a class="nav-link" href="cashier_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="invoice.php">
                    <i class="fas fas fa-fw fa-table"></i>
                    <span>Create Invoice</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cashier Page</span>
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
                    <h1 class="h3 mb-4 text-gray-800">Cashier Page</h1>


               
                     <!-- Basic Card Example -->
                     <div class="print card shadow mb-4">
                                <div class="card-header py-3">
                                    
                                    <h6 class="m-0 font-weight-bold text-primary">Create Invoice <br><br>
                                    <button type="button" onClick="window.location.reload();" class="btn btn-light btn-icon-split">
                                    <span class="icon text-gray-600">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Refresh Page</span>
                                    </button>
                                    </h6>
                                </div>
                                <div class="card-body">
                                <form method="post">
                                <div class="form-group row">
                                <div class="col-sm-4">
                                    <input class="form-control form-control-user" list="customername" autocomplete="off" id="cname" name="customer" type="text" placeholder="Customer Name">
                                    <datalist id="customername">
                                        <?php while ($row = mysqli_fetch_array($result3)) { ?>
                                            <option value="<?php echo $row['customer']; ?>"><?php echo $row['customer']; ?></option>
                                        <?php } ?>
                                    </datalist>
                                
                                
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control form-control-user" name="address" type="text" placeholder="Customer Address" required>
                                </div>
                                </div>

                                <div class="form-group row">
                                
                                <div class="col-sm-4">
                                    <input class="form-control form-control-user" name="day" value="2024-07-29" type="date" required>
                                </div>
                                
                            
                                </div>

                                <div class="form-group row"></div>
                                <div class="col-sm-4">
                                <button type="submit" name="find" class="btn btn-primary btn-user btn-block">Find</button>
                                </div>
                                </form>
                                </div>
                    </div>


                    <?php
                    $custom = '';
                    $today = '';
                    $address = '';
                    $total_qty = 0;
                    $total_prc = 0;
                    $total_amount = 0;
                            if (isset($_POST['find'])){
                            @include '../models/dbcon.php';
                            $customer1 = $_POST['customer'];
                            $day1 = date('m-d-Y',strtotime($_POST['day']));
                            $address = $_POST['address'];
	                        $query1 = mysqli_query($conn,"select * from transactions where day = '$day1' && customer = '$customer1' ") or die(mysqli_error());
	                        $row1 = mysqli_fetch_array($query1);
                            $num_row1 = mysqli_num_rows($query1);

                            if ($num_row1 > 0){

                                $custom = $row1['customer'];
                                $today = $row1['day'];
                                $qty = "SELECT SUM(quantity) AS total_qty FROM transactions where day = '$day1' && customer = '$customer1'";
                                $prc = "SELECT SUM(price) AS total_prc FROM transactions where day = '$day1' && customer = '$customer1' "; 
                                $qty_prc = "SELECT SUM(quantity * price) AS total_amount FROM transactions where day = '$day1' && customer = '$customer1' "; 
                                $res_qty = $conn->query($qty);
                                $res_prc = $conn->query($prc);

                                $res_qty_prc = $conn->query($qty_prc);
                                
                                
                                $row_qty_prc = $res_qty_prc->fetch_assoc();
                                $total_amount = $row_qty_prc['total_amount'];
                         
                                $row_qty = $res_qty->fetch_assoc();
                                $total_qty = $row_qty['total_qty'];
                                $row_prc = $res_prc->fetch_assoc();
                                $total_prc = $row_prc['total_prc'];
                              
                              

                            }else{

                                $custom = '';
                                $today =$day1;
                                $total_qty = 0;
                                $total_prc = 0;
                                $total_amount = 0;
                            }




                            

                        
                            
                            }?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <center>
                            <img src="../img/egay.jpg" style="max-height: 80px;">
                            <h6 class="m-0 font-weight-bold text-primary">Egay’s Enterprises</h6>
                            <h6 class="m-0 font-weight-bold text-primary">Magsaysay st. Barangay 03</h6>
                            <h6 class="m-0 font-weight-bold text-primary">San Mateo, Isabela</h6>
                            </center>
                        </div>
                        <div class="card-body">

                        <p style="font-size:20px;">Sold To: <u><?php echo $custom; ?></u><u style="font-size:20px; float:right;"><?php echo $today; ?></u></p>
                        <p style="font-size:20px;">Address: <u><?php echo $address; ?></u></p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            if (isset($_POST['find'])){
                            @include '../models/dbcon.php';
                            $customer = rtrim($_POST['customer']);
                            $day = date('m-d-Y',strtotime($_POST['day']));
	                        $query2 = mysqli_query($conn,"select * from transactions where day = '$day' && customer = '$customer' ") or die(mysqli_error());
                         
	                        while ($row2 = mysqli_fetch_array($query2)) {
                            $price = $row2['price'];
                            $qnt = $row2['quantity'];
                            $amount = $price* $qnt;
		                    ?>
                                        <tr>
                                            <td><?php echo $row2['quantity']; ?></td>
                                            <td><?php echo $row2['product_name']; ?>,  <?php echo $row2['product_brand']; ?></td>
                                            <td>&#8369; <?php echo $row2['price']; ?></td>
                                            <td>&#8369; <?php echo $amount; ?></td>
                                        </tr>
                                    
                                  <?php }} ?>

                                        <tfoot>
                                        <tr>
                                            <th><?php echo $total_qty; ?></th>
                                            <th></th>
                                            <th>&#8369; <?php echo $total_prc; ?></th>
                                            <th>&#8369; <?php echo $total_amount; ?></th>
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

    <!-- Page level custom scripts -->
    <script>
    $(document).ready(function () {
    $("#searchInput").keyup(function () {
        var query3 = $(this).val();
        if (query3 !== "") {
            $.ajax({
                url: "../controllers/find.php", // PHP script to handle search
                method: "POST",
                data: { query3: query3 },
                success: function (data) {
                    $("#searchResults").html(data);
                },
            });
        } else {
            $("#searchResults").empty();
        }
    });
});
</script>

</body>

</html>