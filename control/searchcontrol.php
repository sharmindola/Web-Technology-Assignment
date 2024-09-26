<?php
include '../model/mydb.php';
    $search=$_GET['search'];
    $mydb= new mydb();
    $conobj = $mydb->createConObject();
    $result = $mydb->showbyId($conobj,"product_reg",$search);


if($result->num_rows > 0){
  foreach($result as $row){
      echo "<table>";
      echo "<h2>Product Details</h2>";
      echo "<h4>Product Name: ".$row["pname"]."</h4>";
      echo "<h4>Product Description: ".$row["pdescription"]."</h4>";
      echo "</table>";
  }
}

  else{
      echo "no data found";
  }
  $data= $mydb->showReview($conobj,"product_reg","customer",$search);

        echo "<h2>Reviews</h2>";
         echo "<ul>";
             

        if($data->num_rows > 0){
            foreach($data as $row){
                echo "<li>";
          echo "<h4>Customer ". $row["cid"] .":  (Rating: " .$row["rating"]." out of 5)". "</h4>";
          echo "<p>".$row["review"]."</p>";
        echo "</li>";
            }
        }
      
      else{
        echo "no data found";
    }
    echo "</ul>";
  $mydb->closecon($conobj);
  ?>