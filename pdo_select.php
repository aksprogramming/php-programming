<?php


try{

	$con=new PDO("mysql:host=localhost;dbname=google","root","");
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="select * from student";

	$stmt=$con->prepare($sql);

	$stmt->execute();

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$result=$stmt->fetchAll();

	echo "Total Number of Rows=".count($result)."<br>";

	foreach ($result as $value) {
		echo $value['student_name']." ".$value['student_mark']."<br>";
	}


}catch(PDOException $e){
	echo $e->getMessage();
}



?>