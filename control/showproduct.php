<?php
include '../model/mydb.php';
echo "<link rel='stylesheet' href='../css/style.css'>";
    $mydb= new mydb();
    $conobj = $mydb->createConObject();
    $data= $mydb->productlist($conobj,"product_reg");
    
    echo "<table>";
    echo "<thead>";
    echo   "<tr>";
    echo "<th>Product ID</th>";
    echo     "<th>Product Name</th>";
    echo       "<th>Quantity Sold</th>";
    echo      "<th>Delivery Status</th>";
    echo       "<th>Payment Status</th>";
    echo       "<th>Reviews</th>";
    echo       "<th>Actions</th>";
    echo   "</tr>";
    echo "</thead>";
    echo "<tbody>";
        
        if ($data->num_rows > 0) {
            
            foreach($data as $row) {
                
                echo "<tr>";
                echo "<td>" . $row["pid"] . "</td>";
                echo "<td>" . $row["pname"] . "</td>";
                echo "<td>" . $row["quantity_sold"] . "</td>";
                echo "<td>" . $row["delivery_status"] . "</td>";
                echo "<td>" . $row["payment_status"] . "</td>";
                echo "<td>" . $row["reviews"] . "</td>";
                
                echo "<td>
                       <a href='../view/updateview.php?pid=" . $row["pid"] . "' class='btn-edit'>Edit</a>
                        <a href='../control/delete.php?pid=" . $row["pid"] . "' class='btn-delete' onclick='return confirm(\"Are you sure you want to delete this product?\");'>Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td >No products found</td></tr>";
        }
        

    echo "</tbody>";
echo "</table>";

$mydb->closecon($conobj);

?>