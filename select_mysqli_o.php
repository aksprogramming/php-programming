<?php

$con=new mysqli("localhost","root","","google");


$sql="select * from student";

$query=$con->query($sql);

echo "Total No. of Rows= ".$query->num_rows."<br>";


while($row=$query->fetch_assoc()){
	echo $row['student_name']." ".$row['student_mark']."<br>";
}






?>