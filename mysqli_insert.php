<?php

$con=mysqli_connect("localhost","root","","google");
$name="Raju";
$mark="200";
$sql="insert into student(student_name,student_mark) values('$name','$mark')";

if(mysqli_query($con,$sql)){
	echo "insertion Successfull isertid=".mysqli_insert_id($con);


}else{
	echo "Insertion not Successfull";
}

mysqli_close($con);


?>