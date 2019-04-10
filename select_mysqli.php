<?php

	$con=mysqli_connect("localhost","root","","google");

	$sql="select * from student";

	$query=mysqli_query($con,$sql);

	echo "Total No. of Rows= ". mysqli_num_rows($query)."<br>";

	while($row=mysqli_fetch_assoc($query)){
		echo $row['student_name']." ".$row['student_mark']."<br>";
	}





	mysqli_close($con);


?>