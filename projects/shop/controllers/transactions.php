<?php 
 @include '../models/dbcon.php';

 if (isset($_POST['add'])) {
                           
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $supplier = $_POST['supplier'];
    $name = strtoupper($name);
    $brand= strtoupper($brand);
    $qnt = $_POST['quantity'];
    $rprice = $_POST['rprice'];
    $price = $_POST['price'];


    mysqli_query($conn,"insert into products (product_name,product_brand,quantity,retail_price,price,supplier)
				values ('$name','$brand','$qnt','$rprice','$price','$supplier')") or die(mysqli_error()); ?>

                                <script>
							 	window.location = "../assistant/assistant_dashboard.php";
                                alert('Product Added');
								</script>






<?php }

if (isset($_POST['addcart'])) {
                          
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $name = rtrim(strtoupper($name));
    $brand= rtrim(strtoupper($brand));
    $qnt = $_POST['quantity'];
    $cart_owner = 'Cashier';
 
 
    date_default_timezone_set('Asia/Manila');
     $day = date("m-d-Y");  
     $timestamp = strtotime("$day");
     $dayss = filter_var($day, FILTER_SANITIZE_STRING);
 
     $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
     $result = mysqli_query($conn,$query_product)or die(mysqli_error());
     $row = mysqli_fetch_array($result);
     $num_row = mysqli_num_rows($result);
     $p_id = $row['id'];
 
     $total = $row['quantity'] - $qnt;
     
     if ($total < 0){    ?>
                             <script>
                                  window.location = "../cashier/cashier_dashboard.php";
                                alert('Product is out of stock');
                                </script>
 
 <?php 
 }else{
 
     $rprice = $row['retail_price'];
     $price = $row['price'];
     $profit = $price - $rprice;
 
     if( $num_row > 0 ) {
 
 
 
         mysqli_query($conn,"insert into cart (product_name,product_id,product_brand,quantity,retail_price,price,profit,cart_owner,day)
         values ('$name','$p_id','$brand','$qnt','$rprice','$price','$profit','$cart_owner','$day')") or die(mysqli_error()); 
   
               ?>
                
                                <script>
                                 window.location = "../cashier/cashier_dashboard.php";
                              
                                </script>
 
 
 
 
 
 
 <?php }else{?>
     <script>
                                 window.location = "../cashier/cashier_dashboard.php";
                                alert('Transaction Failed Cant Find Product');
                                </script>
 
 
 <?php
 } }}



 
if (isset($_POST['addonlinecart'])) {
                          
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $name = rtrim(strtoupper($name));
    $brand= rtrim(strtoupper($brand));
    $qnt = $_POST['quantity'];
    $cart_owner =  $_POST['cart_owner'];
 
 
    date_default_timezone_set('Asia/Manila');
     $day = date("m-d-Y");  
     $timestamp = strtotime("$day");
     $dayss = filter_var($day, FILTER_SANITIZE_STRING);
 
     $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
     $result = mysqli_query($conn,$query_product)or die(mysqli_error());
     $row = mysqli_fetch_array($result);
     $num_row = mysqli_num_rows($result);
     $p_id = $row['id'];
 
     $total = $row['quantity'] - $qnt;
     
     if ($total < 0){    ?>
                             <script>
                                  window.location = "../user/user_dashboard.php";
                                alert('Product is out of stock');
                                </script>
 
 <?php 
 }else{
 
     $rprice = $row['retail_price'];
     $price = $row['price'];
     $profit = $price - $rprice;
 
     if( $num_row > 0 ) {
 
 
 
         mysqli_query($conn,"insert into cart (product_name,product_id,product_brand,quantity,retail_price,price,profit,cart_owner,day)
         values ('$name','$p_id','$brand','$qnt','$rprice','$price','$profit','$cart_owner','$day')") or die(mysqli_error()); 
   
               ?>
                
                                <script>
                                 window.location = "../user/user_dashboard.php";
                              
                                </script>
 
 
 
 
 
 
 <?php }else{?>
     <script>
                                 window.location = "../user/user_dashboard.php";
                                alert('Transaction Failed Cant Find Product');
                                </script>
 
 
 <?php
 } }}






 if (isset($_POST['delete'])) {
                           
    $del_id = $_POST['del_id'];
    
    


    mysqli_query($conn,"DELETE from products WHERE id=$del_id") or die(mysqli_error()); ?>

                                <script>
							 	window.location = "../assistant/assistant_dashboard.php";
                                alert('Product Deleted');
								</script>






<?php }


 if (isset($_POST['edit'])) {
                           
    $edit_id = $_POST['del_id'];
    
?>

                                <script>
							 	window.location = "../assistant/edit.php?id=<?php echo $edit_id; ?>";
								</script>






<?php }


 if (isset($_POST['save'])) {
                           
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $supplier = $_POST['supplier'];
    $name = strtoupper($name);
    $brand= strtoupper($brand);
    $qnt = $_POST['quantity'];
    $rprice = $_POST['rprice'];
    $price = $_POST['price'];
    $product_id = $_POST['product_id'];

    mysqli_query($conn,"update products set product_name = '$name',product_brand = '$brand',quantity = '$qnt', retail_price = '$rprice', price = '$price', supplier = '$supplier' where id = '$product_id'")or die(mysqli_error());
     ?>

                                <script>
							 	window.location = "../assistant/assistant_dashboard.php";
								</script>






<?php }

if (isset($_POST['confirm'])) {
                          
   $name = $_POST['product_name'];
   $brand = $_POST['product_brand'];
   $name = strtoupper($name);
   $brand= strtoupper($brand);
   $qnt = $_POST['quantity'];
   $order_id = $_POST['order_id'];
   $customer = $_POST['customer'];
   $order_id = $_POST['order_id'];


    date_default_timezone_set('Asia/Manila');
    $day = date("m-d-Y");  
    $timestamp = strtotime("$day");
    $dayss = filter_var($day, FILTER_SANITIZE_STRING);

    $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
	$result = mysqli_query($conn,$query_product)or die(mysqli_error());
	$row = mysqli_fetch_array($result);
	$num_row = mysqli_num_rows($result);
    $p_id = $row['id'];
    $total = $row['quantity'] - $qnt;

    $rprice = $row['retail_price'];
    $price = $row['price'];
    $profit = $price - $rprice;

    if( $num_row > 0 ) {



        mysqli_query($conn,"insert into transactions (product_name,product_id,product_brand,quantity,retail_price,price,profit,customer,customer_type,order_id,day)
        values ('$name','$p_id','$brand','$qnt','$rprice','$price','$profit','$customer','Online','$order_id','$dayss')") or die(mysqli_error()); 
    mysqli_query($conn,"update products set quantity = '$total' where id = '$p_id' ")or die(mysqli_error());
    mysqli_query($conn,"update orders set status = 'Done' where order_id = '$order_id' ")or die(mysqli_error());

              ?>
               

                               <script>
                                window.location = "../cashier/cashier_dashboard.php";
                               alert('Product Sold');
                               </script>






<?php }else{?>
    <script>
                                window.location = "../cashier/cashier_dashboard.php";
                               alert('Transaction Failed Cant Find Product');
                               </script>


<?php
} }




if (isset($_GET['order_id'])) {
                          
     $order_id = $_GET['order_id'];
     date_default_timezone_set('Asia/Manila');
     $day = date("m-d-Y");  
     $timestamp = strtotime("$day");
     $dayss = filter_var($day, FILTER_SANITIZE_STRING);
 
     $query_product = "SELECT * FROM orders WHERE order_id = '$order_id'";
     $result = mysqli_query($conn,$query_product)or die(mysqli_error());
     $row = mysqli_fetch_array($result);
     $num_row = mysqli_num_rows($result);
   
 
     if( $num_row > 0 ) {
 
     mysqli_query($conn,"update orders set status = 'Returned' where order_id = '$order_id' ")or die(mysqli_error());
     mysqli_query($conn,"DELETE from transactions WHERE order_id= $order_id") or die(mysqli_error()); 

 
               ?>
                
 
                                <script>
                                 window.location = "../user/orders.php";
                                alert('Product Returned');
                                </script>
 
 
 
 
 
 
 <?php }else{?>
     <script>
                                 window.location = "../user/orders.php";
                                alert('Transaction Failed Cant Find Product');
                                </script>
 
 
 <?php
 } }


 
if (isset($_POST['putback'])) {
                          
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $name = strtoupper($name);
    $brand= strtoupper($brand);
    $qnt = $_POST['quantity'];
    $order_id = $_POST['order_id'];
    $customer = $_POST['customer'];
 
 
     date_default_timezone_set('Asia/Manila');
     $day = date("m-d-Y");  
     $timestamp = strtotime("$day");
     $dayss = filter_var($day, FILTER_SANITIZE_STRING);
 
     $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
     $result = mysqli_query($conn,$query_product)or die(mysqli_error());
     $row = mysqli_fetch_array($result);
     $num_row = mysqli_num_rows($result);
     $p_id = $row['id'];
     $total = $row['quantity'] + $qnt;
 
     $rprice = $row['retail_price'];
     $price = $row['price'];
     $profit = $price - $rprice;
 
     if( $num_row > 0 ) {
 
 
     mysqli_query($conn,"update products set quantity = '$total' where id = '$p_id' ")or die(mysqli_error());
     mysqli_query($conn,"update orders set status = 'Restock' where order_id = '$order_id' ")or die(mysqli_error());
 
               ?>
                
 
                                <script>
                                 window.location = "../cashier/cashier_dashboard.php";
                                alert('Product Sold');
                                </script>
 
 
 
 
 
 
 <?php }else{?>
     <script>
                                 window.location = "../cashier/cashier_dashboard.php";
                                alert('Transaction Failed Cant Find Product');
                                </script>
 
 
 <?php
 } }


 if (isset($_POST['damaged'])) {
                          
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $name = strtoupper($name);
    $brand= strtoupper($brand);
    $qnt = $_POST['quantity'];
    $order_id = $_POST['order_id'];
    $customer = $_POST['customer'];
 
 
     date_default_timezone_set('Asia/Manila');
     $day = date("m-d-Y");  
     $timestamp = strtotime("$day");
     $dayss = filter_var($day, FILTER_SANITIZE_STRING);
 
     $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
     $result = mysqli_query($conn,$query_product)or die(mysqli_error());
     $row = mysqli_fetch_array($result);
     $num_row = mysqli_num_rows($result);
     $p_id = $row['id'];
     $total = $row['quantity'] + $qnt;
 
     $rprice = $row['retail_price'];
     $price = $row['price'];
     $profit = $price - $rprice;
 
     if( $num_row > 0 ) {
 
 
     mysqli_query($conn,"update orders set status = 'Damaged' where order_id = '$order_id' ")or die(mysqli_error());
 
               ?>
                
 
                                <script>
                                 window.location = "../cashier/cashier_dashboard.php";
                                alert('Product Sold');
                                </script>
 
 
 
 
 
 
 <?php }else{?>
     <script>
                                 window.location = "../cashier/cashier_dashboard.php";
                                alert('Transaction Failed Cant Find Product');
                                </script>
 
 
 <?php
 } }







?>







