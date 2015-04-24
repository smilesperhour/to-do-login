<?php 
	// Requires config.php in this file
	require_once(__DIR__ . "/../model/config.php");

	//Filters through the email inputted
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	//Filters through the username inputted
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//Filters through the password inputted
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// $5$ tells php that we want to use SHA 256 5,000 times to create a unique salt for the user
	// uniqid is a fucntion that creates a unique id for us
	// mt_rand generates a random number and uses that number to create a really unique id for it
	$salt = "$5$" . "round=5000$" . uniqid(mt_rand(), true) . "$";

	// Telling the crypt fucntion to use this password and this salt to create an encrypted password
	$hashedPassword = crypt($password, $salt);

	// Created a query and it will insert into the table called users
	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
			// Sets Email to Email variable
			. "email = '$email',"
			// Sets Username to Username variable
			. "username = '$username',"
			// Sets Password to the hashedPassword variable
			. "password = '$hashedPassword',"
			// Sets Salt to the Salt variable
			. "salt = '$salt'");
	// Checks if the Query is successful
	if ($query) {
		// Echoes out success if successful
		echo "Successfully created user: $username";
	}
	else {
		// If not successful, it will display the error preventing success
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}