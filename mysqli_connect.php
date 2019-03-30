<?php

$con=mysqli_connect("localhost","root","","google");

if($con){
	echo "Connected Successfully";
}
else{
	die("Not Connected");
}



mysqli_close($con);

?>