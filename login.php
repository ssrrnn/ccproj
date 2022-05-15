<?php
	include_once 'header.php'; 
?>

	<section class="signup-form">
		<h2>Log In</h2>
		<p style="text-align: center;">Enter your login credentials</p>
		<hr>
		<div class="signup-form-form">
		 <form action="includes/login.inc.php" method="post"> 
			<input type="text" name="uid" placeholder="Username/Email">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Log In</button>
		 </form>
		</div>
		<?php  
		  if (isset($_GET["error"])) {
		  	if($_GET["error"] == "emptyinput") {
		  		echo "<p>Fill all Fields!</p>";
		  	}
		  	else if($_GET["error"] == "wronglogin") {
		  		echo "<p>Incorrect login credentials</p>";
		  	}
		  }		  
	  ?>
	</section>



<?php
	include_once 'footer.php'; 
?>