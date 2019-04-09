<?php


$con=new mysqli("localhost","root","","google");


$stmt=$con->prepare("insert into student(student_name,student_mark) values(?,?)");


$stmt->bind_param("ss",$name,$mark);

$name="google";
$mark="250";

$stmt->execute();
echo "Inserted Successfully";

$name="sanju";
$mark="350";

$stmt->execute();



mysqli_close($con);



?>