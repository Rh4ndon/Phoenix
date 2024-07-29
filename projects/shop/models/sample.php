<?php
include "dbcon.php";

$sql1 = "SELECT DISTINCT product_name FROM products";
$result1 = mysqli_query($conn, $sql1) or die("Error " . mysqli_error($conn));
$sql2 = "SELECT DISTINCT product_brand FROM products";
$result2 = mysqli_query($conn, $sql2) or die("Error " . mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Autocomplete Textbox in HTML5, PHP, and MySQL</title>
</head>
<body>
    <label for="pname">Product Name</label>
    <input type="text" list="productname" autocomplete="off" id="pname">
    <datalist id="productname">
        <?php while ($row = mysqli_fetch_array($result1)) { ?>
            <option value="<?php echo $row['product_name']; ?>"><?php echo $row['product_name']; ?></option>
        <?php } ?>
    </datalist>

    <label for="pbrand">Product Brand</label>
    <input type="text" list="productbrand" autocomplete="off" id="pbrand">
    <datalist id="productbrand">
        <?php while ($row = mysqli_fetch_array($result2)) { ?>
            <option value="<?php echo $row['product_brand']; ?>"><?php echo $row['product_brand']; ?></option>
        <?php } ?>
    </datalist>
</body>
</html>
