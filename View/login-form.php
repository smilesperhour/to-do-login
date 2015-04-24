<?php
	// Requires the config.php file
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
	<div>
		  
		<!-- Labeled Username and you'll input your username -->
		<label for="username">Username : </label>
		<!-- The value os used to hold the username in a variable for further use -->
		<input type="text" name="username" value="<?php $username ?>" /> 
		
	</div>

	<div>
		<!-- Labeled Password and you'll input your password -->
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
		<!-- Submitting Button, when the user clicks it, they will be greeted by a pop up window -->
		<button type = "submit" onclick="welcome()">Submit</button>
		<!-- When the function is ran, the user will be greeted by their username!!! -->
		<script> function welcome() {alert("Welcome <?php echo $username; ?>!")}</script>

	</div>
</form>