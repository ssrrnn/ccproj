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
          <a class="nav-link" href="users.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Products</a>
        </li>        
      </ul>
    </div>
  </nav>
  <title>View Order Details</title>
</head>
<body>

<h2>Order Details</h2>

<table border="4">
  <tr>
    <td>Sr.No.</td>
    <td>Customer Name</td>
    <td>Customer Email</td>
    <td>Contact</td>
    <td>Delivery Address</td>
    <td>Payment Mode</td>
    <td>Products Purchased</td>
    <td>Amount Paid (₹)</td>
  </tr>

<?php

include "includes/dbh.inc.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from orders"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['phone']; ?></td> 
    <td><?php echo $data['address']; ?></td>  
    <td><?php echo $data['pmode']; ?></td>    
    <td><?php echo $data['products']; ?></td>  
    <td><?php echo $data['amount_paid']; ?></td>  
  </tr> 


<?php
}
?>
</table>

<hr>