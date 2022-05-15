<?php
	include_once 'header.php'; 
?>

	<section class="signup-form">
		<h2>Sign Up</h2>
		<p style="text-align:center;">Please fill in this form to create an account.</p>
		<hr>
		<div class="signup-form-form">
		<form action="includes/signup.inc.php" method="post"> 
			<input type="text" name="name" placeholder="Fullname">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwdrepeat" placeholder="Repeat Password ">
			<button type="submit" name="submit">Sign Up</button>
		</form>
		</div>
	</div>
	<?php  
	  if (isset($_GET["error"])) {
	  	if($_GET["error"] == "emptyinput") {
	  		echo "<p>Fill all Fields!</p>";
	  	}
	  	else if($_GET["error"] == "invaliduid") {
	  		echo "<p>Enter a proper Username!</p>";
	  	}
	  	else if($_GET["error"] == "invalidemail") {
	  		echo "<p>Enter a proper Email!</p>";
	  	}
	  	else if($_GET["error"] == "passwordsdontmatch") {
	  		echo "<p>Passwords should match!</p>";
	  	}
	  	else if($_GET["error"] == "stmtfailed") {
	  		echo "<p>Something went wrong!</p>";
	  	}
	  	else if($_GET["error"] == "usernametaken") {
	  		echo "<p>Username taken!</p>";
	  	}
	  	else if($_GET["error"] == "none") {
	  		echo "<p>You have signed up!</p>";
	  	}		
	 
	  }
	  ?>

	</section>

	



<?php
	include_once 'footer.php'; 
?>