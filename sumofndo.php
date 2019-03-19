<?php
/*
sum of n natural numbers

*/

$limit=5;
$sum=0;

$i=1;
do{
	$sum=$sum+$i; 
	$i=$i+1;	
}while($i<=$limit);

echo "Sum of $limit natural number is $sum";

?>