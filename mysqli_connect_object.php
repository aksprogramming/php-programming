<?php

$host="localhost";
$username="root";
$password="";
$dbname="google";

//$con=mysqli_connect($host,$username,$password,$dbname);

$con=new mysqli($host,$username,$password,$dbname);

if(!$con->connect_error){
	echo "Connected Successfully";
}
else{
	die("Not Connected ".$con->connect_error);
}


?>