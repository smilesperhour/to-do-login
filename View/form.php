<?php
	// Requires config.php inside this file
	require_once(__DIR__ . "/../model/config.php");
	// Requires login-verify.php inside this file
	require_once(__DIR__ . "/../controller/login-verify.php");

	// If not authenticated, redirect the user, then kill the program
	if (!authenticateUser()) {
		// Redirects non - authenticated user to my blog instead of post.php
		header("Location: " . $path . "blog.php");
		// Kills the program
		die();
	}

?>
<!-- Header -->
<h1>Create Blog Post</h1>

<!-- Creates a form -->
<form method = "post" action = "<?php echo $path . "controller/create-post.php"; ?>">
<!-- Needs 2 Text Boxs (2 Divs) -->
 <div>
 <!-- Will be able to input text for what the Title will be  -->
 	<label for="title">Title: </label>
 <!-- Will be able to type text into this input box; title -->
 	<input type = "text" name = "title" />
 </div>

 <div>
 <!-- The label/name for the div; Post -->
 	<label for="post">Post:</label>
 <!-- The area for the user to type in what they want to say -->
 	<textarea name="post"></textarea>
 </div>

 <div>
 <!-- Button tag called Submit with the type being submit -->
 	<button type= "submit">Submit</button>
 </div>
</form>