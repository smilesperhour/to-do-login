<?php
	//Requires config.php inside this file
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// Selects the salt and password form the users table where the username is the username sent via the post 
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	if($query->num_rows == 1) {
		$row = $query->fetch_array();

		if ($row["password"] === crypt($password, $row["salt"])) {
			// Created a mechanism to make sure the user has been authenticated
			$_SESSION["authenticated"] = true;
			// Redirects back to the blog
			header("Location: " . $path . "blog.php");
		}		
		else {
			// Echoes to the user that his given information wasn't correct
			echo "<p>Invalid username and password</p>";
		}
	}
	else {
		// Echoes to the user that his given information wasn't correct
		echo "<p>Invalid username and password</p>";
	}