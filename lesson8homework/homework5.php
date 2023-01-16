<?php
function func($arr){
	foreach($arr as $key => $item){
		$c=0;
		$a=$arr[$key];
		$b=$arr[$key+1];
		if($a==$b){
			echo 'Yes';
			$c++;
			break;
		}
	}
	if ($c==0){
		echo 'No';
	}
} 

func([1,2,3,4,4,45,2]);
?>