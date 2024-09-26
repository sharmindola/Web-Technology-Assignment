<!Doctype html>
<html>

<head>
  <title>Online management system </title>
</head>
<link rel="stylesheet"  href="../css/style.css">

<body class="newbody">
  <h1 class="newhead">Seller Dashboard</h1>
  <form class="newform" onsubmit="return validateForm()">
  <input type="text" id="search" placeholder="Search Products" onkeyup="searchProduct()">
    <h2>Product List</h2>
   <?php
   include '../control/showproduct.php';
   ?>
    <p id="show"></p>
    <script src="../js/script.js"></script>
    
      

  </form>
</body>

</html>