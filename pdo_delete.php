<?php


try{


	$con=new PDO("mysql:host=localhost;dbname=google","root","");

	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	$sql="delete from student where student_mark='540'";

	if($con->exec($sql)){
		echo "deleted Successfully";
	}






}catch(PDOException $e){

	echo $e->getMessage();
}


$con=null;


?>