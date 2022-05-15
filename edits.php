<?php

include "includes/dbh.inc.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from spice where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_qty = $_POST['product_qty'];
    $product_image = $_POST['product_image'];
    $product_code = $_POST['product_code'];
	
    $edit = mysqli_query($conn,"update product set product_name='$product_name', product_price='$product_price',product_qty='$product_qty',product_image='$product_image',product_code='$product_code' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:admin.php"); // redirects 
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>


<form method="POST">
  <p>Product Code</p>
  <input type="text" name="product_code" value="<?php echo $data['product_code'] ?>" placeholder="Enter product_code" Required>
  <p>Product Name</p>
  <input type="text" name="product_name" value="<?php echo $data['product_name'] ?>" placeholder="Enter Product Name" Required>
  <p>Price</p>
  <input type="text" name="product_price" value="<?php echo $data['product_price'] ?>" placeholder="Enter product_price" Required>
  <p>Quantity</p>
  <input type="text" name="product_qty" value="<?php echo $data['product_qty'] ?>" placeholder="Enter product_qty" Required>
  <p>Image Path</p>
  <input type="text" name="product_image" value="<?php echo $data['product_image'] ?>" placeholder="Enter product_ image path" Required>
  <br>
  <br>
  <input type="submit" name="update" value="Update">


</form>