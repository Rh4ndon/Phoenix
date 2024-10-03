<?php

@include '../models/dbcon.php';

var_dump($_POST);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uid = $_POST['u_id'];

    $product_names = $_POST['product_name'];
    $product_brands = $_POST['product_brand'];
    $customer_types = $_POST['customer_type'];
    $quantities = $_POST['quantity'];
    $cart_id = $_POST['id'];

    if (empty($_POST['product_name'])) { ?>

        <script>
        window.location = "../user/user_dashboard.php";
       alert('Cart is empty');
       </script>

   <?php }

    date_default_timezone_set('Asia/Manila');
    $day = date("m-d-Y");  
    $timestamp = strtotime("$day");
    $dayss = filter_var($day, FILTER_SANITIZE_STRING);

    for ($i = 0; $i < count($product_names); $i++) {
        $name = rtrim(strtoupper($product_names[$i]));
        $brand= rtrim(strtoupper($product_brands[$i]));
        $qnt = $quantities[$i];

  

        $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
        $result = mysqli_query($conn,$query_product)or die(mysqli_error());
        $row = mysqli_fetch_array($result);
        $num_row = mysqli_num_rows($result);
        if ($num_row > 0) {
        $p_id = $row['id'];



        $total = $row['quantity'] - $qnt;

        $rprice = $row['retail_price'];
        $price = $row['price'];
        $profit = $price - $rprice;
        

     
        mysqli_query($conn,"insert into orders (product_name,product_id,product_brand,retail_price,price,quantity,u_id,fname,lname,day,status)
        values ('$name','$p_id','$brand','$rprice','$price','$qnt','$uid','$fname','$lname','$dayss','Pending')") or die(mysqli_error()); 
        
        mysqli_query($conn,"DELETE from cart WHERE id=$cart_id[$i]") or die(mysqli_error()); 


        
        } else { 
            
            ?>
    <script>
                                window.location = "../user/user_dashboard.php";
                               alert('Transaction Failed Some Product Not Found');
                               </script>


<?php
            
        }
       
    }
                          




?>
    <script>
                                window.location = "../user/user_dashboard.php";
                               alert('Order Successful');
                               </script>


<?php

    

?>