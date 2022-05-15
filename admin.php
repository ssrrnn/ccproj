
<!DOCTYPE html>
<html lang="en">

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
          <a class="nav-link" href="insert.php">Insert</a>
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
  <title>Display all product from Database</title>
</head>
<body>

<h2>Product Details</h2>

<table border="4">
  <tr>
    <td>Sr.No.</td>
    <td>Product Name</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Image</td>
    <td>Code</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "includes/dbh.inc.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from product"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['product_price']; ?></td>
    <td><?php echo $data['product_qty']; ?></td> 
    <td><?php echo $data['product_image']; ?></td>  
    <td><?php echo $data['product_code']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr> 


<?php
}
?>
</table>

<hr><br>


<h2>Spice Details</h2>

<table border="4">
  <tr>
    <td>Sr.No.</td>
    <td>Spice Name</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Image</td>
    <td>Code</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "includes/dbh.inc.php"; // Using database connection file here

$rec = mysqli_query($conn,"select * from spice"); // fetch data from database

while($data = mysqli_fetch_array($rec))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['product_price']; ?></td>
    <td><?php echo $data['product_qty']; ?></td> 
    <td><?php echo $data['product_image']; ?></td>  
    <td><?php echo $data['product_code']; ?></td>    
    <td><a href="edits.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr> 


<?php
}
?>

</table>

<hr><br>
<h2>Dairy Details</h2>

<table border="4">
  <tr>
    <td>Sr.No.</td>
    <td>Spice Name</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Image</td>
    <td>Code</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "includes/dbh.inc.php"; // Using database connection file here

$rec = mysqli_query($conn,"select * from dairy"); // fetch data from database

while($data = mysqli_fetch_array($rec))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['product_price']; ?></td>
    <td><?php echo $data['product_qty']; ?></td> 
    <td><?php echo $data['product_image']; ?></td>  
    <td><?php echo $data['product_code']; ?></td>    
    <td><a href="editd.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr> 


<?php
}
?>

</table>
<hr><br>

<h2>Grains Details</h2>

<table border="4">
  <tr>
    <td>Sr.No.</td>
    <td>Grain Name</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Image</td>
    <td>Code</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "includes/dbh.inc.php"; // Using database connection file here

$rec = mysqli_query($conn,"select * from grain"); // fetch data from database

while($data = mysqli_fetch_array($rec))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['product_price']; ?></td>
    <td><?php echo $data['product_qty']; ?></td> 
    <td><?php echo $data['product_image']; ?></td>  
    <td><?php echo $data['product_code']; ?></td>    
    <td><a href="editg.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr> 


<?php
}
?>

</table>
<hr><br>
<h2>Snack Details</h2>

<table border="4">
  <tr>
    <td>Sr.No.</td>
    <td>Snack Name</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Image</td>
    <td>Code</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "includes/dbh.inc.php"; // Using database connection file here

$rec = mysqli_query($conn,"select * from snack"); // fetch data from database

while($data = mysqli_fetch_array($rec))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['product_price']; ?></td>
    <td><?php echo $data['product_qty']; ?></td> 
    <td><?php echo $data['product_image']; ?></td>  
    <td><?php echo $data['product_code']; ?></td>    
    <td><a href="editn.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr> 


<?php
}
?>

</table>

</body>
</html>

