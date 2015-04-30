<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>main screen</title>
</head>
<header class="header">
	Main Screen
</header>
<body class="main-screen">
	<button  class="button" type="button">
		<a href="<?php echo $path . "register.php"?>">register</a>
	</button>
		<button class="button" type="button">
		<a href="<?php echo $path . "login.php"?>">log in</a>
	</button>
		<button  type="button">
		<a href="<?php echo $path . "controller/logout-user.php"?>">logout</a>
	</button>
</body>
</html>