<?php


$con=new mysqli("localhost","root","","google");

$name="Teena";
$mark="250";
$sql="insert into student(student_name,student_mark) values('$name','$mark')";

if($con->query($sql)===TRUE){
	echo "Inserted Successfully inserted Id=".$con->insert_id;
}
else{
	echo "not Inserted";
}




?>