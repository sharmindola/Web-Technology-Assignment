<?php
include '../control/process.php';
?>
<!Doctype html>
<html>

<head>
  <title>Online management system </title>
</head>
<link rel="stylesheet" href="../css/style.css">

<body>
  <h1>Add Product</h1>
  <form action=""  method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <div>Product Name:<br> <input type="text" class="pname" name="product_name" id="name"></div>
    <div>Product Category:<br> <select name="product_category" id="category">
      <option value="Electronics">Electronics</option>
      <option value="Furniture">Furniture</option>
      <option value="Home Decor">Home Decor</option>
      <option value="Books">Books</option>
      <option value="Bedding & Bath">Bedding & Bath</option>
    </select></div><br><br>
    <div>Product Description:<br> <textarea name="product_description" id="description" rows="2" cols="20">
    </textarea></div>

    <div>Product Price:<br> <input type="number" class="pprice" name="product_price" id="price" step="1"></div>

    <div>Product Quantity:<br> <input type="number" class="pquantity" name="product_quantity" id="quantity"></div>

    <div>Product Image:<br> <input type="file" class="pimage" id="img" name="img" accept="image/   *"></div>

    <div>Product Status:<br> <select name="status" id="status"></div>
      <option value="active">Active</option>
      <option value="Inactive">Inactive</option>
    </select><br><br>
    <input type="submit" class="submit" name="submit" value="Add Product">
<div> <?php echo $errorMessage; ?> </div>
<?php echo $errorNumber; ?>
<p id="emptyout"></p>

  </form>
  <script src="../js/script.js">

  </script>
</body>

</html>