<?php 
// requires config.php in navigation.php
require_once(__DIR__ . "/../model/config.php");
?>
<!-- Navigates to my post.php -->
<nav>
 <ul>
 <!-- php text inside an anchor, echoes out $path varible which holds location for post.php -->
 <li><a href="<?php echo $path . "post.php" ?>">The Blog Post Forum!</a></li>
 </ul>
</nav>