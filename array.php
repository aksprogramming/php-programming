<?php

$a=array("rahul","name5"=>"ron");


array_push($a, "google");

$a['name1']="surya";
$a['name2']="ken";
$a['name3']="abc";


print_r($a);

// for($i=0;$i<count($a);$i++){
// 	echo "<br>".$a[$i];
// }

foreach ($a as $key => $value) {
	echo "<br>$key ".$value;
}




?>