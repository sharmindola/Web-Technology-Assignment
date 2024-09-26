<?php
include '../model/mydb.php';

$errorMessage="";
$errorNumber="";
$haserror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $pname=$_REQUEST["product_name"];
    $pcategory=$_REQUEST["product_category"];
    $pdescription= $_REQUEST["product_description"];
    $price = $_REQUEST["product_price"];
    $quantity = $_REQUEST["product_quantity"];
    $status = $_REQUEST["status"];
    if (isset($_REQUEST["submit"])) 
    {
        
        if (!empty($pname) && !empty($pcategory)  && !empty($price) && !empty($quantity)  && !empty($status) ) 
        {
            $errorMessage="Thank you php validation successful";
        } 

        else 
        {
            
            $errorMessage ="Please fill all the boxes";
            $haserror = true;
        }

        if (is_numeric($price) && is_numeric($quantity) && $quantity>0 && $price>0) 
        {
            $errorNumber ="your price & quantity are valid";
        } 
        else 
        {
            $errorNumber = "Please enter valid price & quantity";
            $haserror = true;
        }

        move_uploaded_file($_FILES["img"]["tmp_name"], "../images/".$_FILES["img"]["name"]);

        if($haserror)
        {
            echo "Please fulfill all criteria";
        }
        else
        {
            echo "Data store successfully";
            $mydb=new Mydb();
            $conobj=$mydb->createConObject();
            
            $mydb->insertOrder($conobj, "product_reg",$pname,$pcategory,$pdescription,$price,$quantity,"../images/".$_FILES["img"]["name"],$status);
        }
    }

}
?>