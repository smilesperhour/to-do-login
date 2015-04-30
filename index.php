<!DOCTYPE html>
<html style="background-image: url("abstract.jpg"); ">
<head>
		<title>To-Do List </title>
		<link rel="stylesheet" type="text/css" href="css/main.css">	


</head>	
<body>
	<div class="box">
		<div class="wrap">
			<div class="task-list">
			 		<ul>
			 			<?php require("connect.php");
			 			
			 			$mysqli = new mysqli('localhost', 'root' , 'root', 'to-do-login');
			 			$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
			 			if ($result = $mysqli->query($query)) {
			 				
			 				$numrows = $result->num_rows;
			 				
			 				if ($numrows>0) {
			 					while($row = $result->fetch_assoc()){
			 						$task_id = $row['id'];
			 						$task_name = $row['task'];
			 						
			 					 echo '<li>
			 					 <span>'.$task_name. '</span>
			 					 <img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg"/>
								 </li>';
			 					}
			 				}
			 			}
			 			?> 
			 		</ul>
			</div>
		<form class="add-new-task" autocomplete="off">
			<input class="tasklength" type="text" name="new-task" placeholder="Add new item..."/>
		</form>
		</div>
		<a href="controller/logout-user.php">Log out</a>
</body>
	<script scr="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<script>
			add_task();  
		function add_task(){
			$('.add-new-task').submit(function() {
				var new_task = $('.add-new-task input[name=new-task]').val();
				if (new_task != ''){
					$.post('includes/add-task.php', {task: new_task}, function(data) {
						$('.add-new-task input[name=new-task]').val();
							$(data).appendTo('.task-list ul').hide().fadeIn();
					});
				}
				return false;
			});
		}
	
		$('.delete-button').click(function(){
			var current_element = $(this);
			var task_id = $(this).attr('id');
			$.post('delete.php', {id: task_id}, function(){
				current_element.parent().fadeOut("fast" , function(){
				$(this).remove();
				});
			});
		});
	</script>
	</div>

</html>