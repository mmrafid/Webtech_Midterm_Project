<?php

session_start();

$con = mysqli_connect('localhost' , 'root' , '');

mysqli_select_db($con, 'userregistration' );

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from user where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	echo"Username already taken, Try another.....";
	
}else{
	
	$reg = "insert into user (name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	
	echo "You have been registered successfully as a job provider.";
	
}


?>