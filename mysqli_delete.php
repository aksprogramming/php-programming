<?php

$con=new mysqli("localhost","root","","google");

$sql="delete from student where student_name='ken'";

$result=$con->query($sql);

if($result === TRUE){
	echo "Deleted Successfully";
}

$con->close();


?>