<?php
include '../model/mydb.php';


$productsid=$_GET['pid'];

$mydb= new mydb();
$conobj = $mydb->createConObject();
$data= $mydb->deleteById($conobj,"product_reg",$productsid);
$mydb->closecon($conobj);
echo "Successfully Deleted";

?>