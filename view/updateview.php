<?php
include '../control/update.php';
?>
<html>
<body>

<form action="" method="post">
Product id: <input type="number" name="pid" value="<?php echo $productid; ?>" readonly><br><br>
Product Name: <input type="text" name="pname" value="<?php echo $productname; ?>"><br><br>
Quantity Sold: <input type="text" name="product_quantity" value="<?php echo $productquantity; ?>"><br><br>
Delivery status: <input type="text" name="dstatus" value="<?php echo $productstatus; ?>"><br><br>
Payment status: <input type="text" name="pstatus" value="<?php echo $paymentstatus; ?>"><br><br>
<input type="submit" href='../view/seller.php' name="update" value="Update">

</form>

</body>
</html>