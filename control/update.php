<?php
include '../model/mydb.php';


$productsid=$_GET['pid'];

$mydb= new mydb();
$conobj = $mydb->createConObject();
$data= $mydb->showById($conobj,"product_reg",$productsid);


if($data->num_rows > 0){
    foreach($data as $row){
     $productid=$row["pid"];
     $productname=$row["pname"];
     $productquantity=$row["quantity_sold"];
     $productstatus=$row["delivery_status"];
     $paymentstatus=$row["payment_status"];
     
    }
}

    else{
        echo "no data found";
    }
if(isset($_POST["update"])){
    $mydb= new mydb();
$data= $mydb->updateProduct($conobj,"Product_reg",$productsid,$_POST["product_quantity"],$_POST["pname"],$_POST["dstatus"],$_POST["pstatus"]);

if($data===TRUE) {
echo "updated";
}
else{
    echo "not updated";
}

}
$mydb->closecon($conobj);
if (isset($_POST['update'])) {
    // Perform the update operation here
    
    // If update is successful, redirect to seller.php
    header("Location: ../view/seller.php");
    exit();
}
?>