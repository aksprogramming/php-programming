<?php

$con=mysqli_connect("localhost","root","","google");

$sql="delete from student where student_name='ken'";

$flag=mysqli_query($con,$sql);
if($flag){
	echo "Deleted Successfully";
}


mysqli_close($con);

?>