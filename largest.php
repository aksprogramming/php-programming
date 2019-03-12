<?php
	$a=30;$b=20;$c=55;


	if($a>=$b){
		if($a>=$c) 
			echo "The largest number is $a";
		else
			echo "The largest number is $c";

	}else{
		if($b>=$c){
			echo "The largest number is $b";

		}else{
			echo "The largest number is $c";
		}
	}


?>