<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
 
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php"><img src="img/log.png" width="60" height="60"padding = 10px 0px 0px 0px margin=10px; alt="Food logo"></a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users.php">Customers</a>
        </li>         
      </ul>
    </div>
  </nav>
<title>Insert into Database</title>
</head>
<body>
<?php
include "includes/dbh.inc.php"; // Using database connection file here

if(isset($_POST['submit']))
{	
    $id = $_POST['id'];	
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_qty = $_POST['product_qty'];
    $product_image = $_POST['product_image'];
    $product_code = $_POST['product_code'];

    $sql = "INSERT INTO product(id,product_name,product_price,product_qty,product_image,product_code) VALUES ('$id','$product_name','$product_price','$product_qty','$product_image','$product_code')";

    if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    mysqli_close($conn);
    header("location:admin.php"); // redirects 
    exit;
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

mysqli_close($conn); // Close connection
?>

<h3>Insert New</h3>
<form action="insert.php" method="POST">
  ID :<br> <input type="number" name="id" placeholder="ID" Required>
  <br>  
  Product :<br> <input type="text" name="product_name" placeholder="Enter Product Name" Required>
  <br>
  Price :<br> <input type="number" name="product_price" placeholder="Enter Price" Required>
  <br>
  Quantity :<br> <input type="number" name="product_qty" placeholder="Enter Quantity" Required>
  <br>
  Image :<br> <input type="text" name="product_image" placeholder="Enter Price" Required>
  <br>
  Code :<br> <input type="text" name="product_code" placeholder="Enter Code" Required>
  <br>
  <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>