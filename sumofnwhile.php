<?php
/*
sum of n natural numbers

*/

$limit=6;
$sum=0;

$i=1;
while($i<=$limit){
	$sum=$sum+$i; 
	///$i++;

	$i=$i+1;
}
echo "Sum of $limit natural number is $sum";

?>