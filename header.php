<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<title>Grocery Express</title>
	<link href="href="https://fonts.googleapis.com/css2?family=Crimson+Pro>
	<link rel="stylesheet"  href="css/reset.css">
	<link rel="stylesheet"  href="css/style.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>
<body>
	<nav>
		<div class="wrapper">
			<a href="index.php"><img src="img/log.png" width="60" height="60"padding = 10px 0px 0px 0px margin=10px; alt="Food logo">
			</a>
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<div class="dropdown-menu">
					<button class="menu-btn">Categories ></button>
					<div class="menu-content">
					<a class="links-hidden" href='dairy.php'>Dairy</a>
					<a class="links-hidden" href="grain.php">Grains</a>
					<a class="links-hidden" href="snack.php">Snacks</a>
				</div>
				</div>
			
				<?php
					if (isset($_SESSION["useruid"])) {
						echo "<li><a href='spice.php'>Spice Mixer</a></li>";
						echo "<li><a href='cart.php'>Cart</a></li>";
						echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
					}
					else{
						echo "<li><a href='signup.php'>Sign Up</a></li>";
						echo "<li><a href='login.php'>Login</a></li>";
					}
				?>	
			</ul>
		</div>
	</nav>