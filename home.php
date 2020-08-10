<?php

session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');	
}

?>






<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Jobs@365::home </title>
</head>
<body>
	
	<h1> Welcome to jobs@365.com </h1>
	<br />
	
	
	 <img width="150" height="200" src="propic.jpg">
	 <br />
	 <h3> Name: <?php echo $_SESSION['username'];?> </h3>
	
	
	
	
	
	
	<ul style="list-style-type:none">
	
	<li><h2> Profile options </h2></li>
	<li><a href="changedp.php"> Change profile picture </a> </li>
	
	</ul>
	
	
	<ul style="list-style-type:none">
	
	<li><h2> Actions </h2></li>
	<li> <a href="postjob.html"> Post a job </a> </li>
	<li> <a href="applicants.html"> View applicants </a> </li>
	<li> <a href="removejob.html"> Remove job </a> </li>
	
	
	</ul>
	
	
	
	
	
	
	
	
	
	
	
	<a href="logout.php">Logout</a>
	
</body>
</html>


