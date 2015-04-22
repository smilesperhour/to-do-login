<!DOCTYPE html>
<html>
<head>
	<title> Simple To-do</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="wrap">
		<div class="task-list">
			<ul>
			  <?php require("includes/connect.php"); ?>
			</ul>
	</div>
	<form class="add-new-task" autocomplete="off">
	 <input type="text" name="new-task" placeholder="Add new item..."/>
	 </form>
	 </div>
</body>
</html>