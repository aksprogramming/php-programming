<?php


try{

	$con=new PDO("mysql:host=localhost;dbname=google","root","");

	$sql="insert into student(student_name,student_mark) values('ken','500')";

	$con->exec($sql);

	$id=$con->lastInsertId();

	echo "Inserted Successfully and id=".$id;

	$con=null;

}catch(PDOException $e){

	echo $e->getMessage();

}




?>