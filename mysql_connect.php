<?php

$con=mysql_connect("localhost","root","");

if($con){
	echo "Connected Successfully";
}
else{
	die("Not Connected");
}

mysql_select_db("google");

mysql_close($con);

?>