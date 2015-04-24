<?php
	// Requires the config.php file
	require_once(__DIR__ . "/../model/config.php");
?>

<!-- Indicates that this form is to Register -->
<h1>Register</h1>

<!-- Creates a post -->
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
		<!-- Labled Email and you'll be able to input your email -->
		<label for="email">Email : </label>
		<input tpye="text" name="email" />
	</div>

	<div>
		<!-- Labeled Username and you'll input your username -->
		<label for="username">Username : </label>
		<input type="text" name="username" />
	</div>

	<div>
		<!-- Labeled Password and you'll input your password -->
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
		<!-- Submitting Button -->
		<button type="submit">Submit</button>
	</div>

</form>>