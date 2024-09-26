<?php
class mydb
{
    public $DBHostName = "";
    public $DBUserName = "";
    public $DBPassword = "";
    public $DBName = "";
 
    function __construct()
    {
        $this->DBHostName = "localhost";
        $this->DBUserName = "root";
        $this->DBPassword = "";
        $this->DBName = "product";
 
    }
 
    function createConObject()
    {
        return new mysqli($this->DBHostName, $this->DBUserName, $this->DBPassword, $this->DBName);
    }
 
    function insertOrder($conn, $table, $pname,$pcategory,$pdescription, $price,$quantity,$pimage,$pstatus)
    {
        $qrystring = "INSERT INTO $table (pid, pname,pcategory,pdescription,price,pquantity,pimage,pstatus,quantity_sold,delivery_status,reviews,payment_status)
    VALUES ('', '$pname','$pcategory','$pdescription', '$price','$quantity','$pimage','$pstatus','200','Delivered','2','Unpaid')";
        $result = $conn->query($qrystring);
        if ($result === false) {
            return $conn->error;
        } else {
            return $result;
        }
    }
    function productList($conn,$table)
    {
        $qrystring = "SELECT * FROM $table";
        $result = $conn->query($qrystring);
        return $result;

    }
    function showbyId($conn,$table,$id){
        $querystring="SELECT * FROM $table Where pid ='$id'";
        $result=$conn->query($querystring);
        return $result;
    }

    function updateProduct($conn,$table,$id,$qsold,$pname,$dstatus,$pstatus)
    {
        $querystring="UPDATE $table SET quantity_sold='$qsold',pname='$pname',delivery_status='$dstatus', pstatus='$pstatus' Where pid ='$id'";
        $result=$conn->query($querystring);
        return $result;
    }

    function showReview($conn,$table1,$table2,$id)
    {
        $querystring="SELECT t2.cid, t2.review, t2.rating
        FROM $table1 AS t1
        JOIN $table2 AS t2 ON t1.pid = t2.pid
        WHERE t1.pid = '$id'";
        $result=$conn->query($querystring);
        return $result;
    }
    
    function deleteById($conn,$table,$id)
    {
        $querystring="DELETE FROM $table Where pid ='$id' ";
        $result=$conn->query($querystring);
        return $result;
    }
    
    function countReview($conn,$table,$id)
    {
        $querystring="SELECT COUNT(*) AS SUM FROM $table WHERE pid='$id' ";
        $result=$conn->query($querystring);
        return $result;
    }

    function closeCon($conn)
    {
        $conn->close();
    }
 
}
 
?>