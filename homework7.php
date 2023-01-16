<?php
function func($arr){
	$c=0;
	foreach($arr as $item){
		if ($item%2!=0){
			$c++;
		}
	}
	if($c>0){
		echo 'В массиве присутствует нечётное число.';
	}
	else{
		echo 'Все числа в массиве чётные.';
	}
}
func([2,4,3])
?>