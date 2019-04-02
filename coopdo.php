<?php
$username="root";
$password="";

try{

$conn=new PDO("mysql:host=localhost;dbname=google",$username,$password);

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo "Connection Successfull";

}catch(PDOException $e){

	echo $e->getMessage();
}



?>
