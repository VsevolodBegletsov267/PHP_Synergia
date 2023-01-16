<?php
function func($number){
	$count=0;
while ($number > 0) {
    $array[] = $number % 10;
    $number = intval($number / 10);
    }
    $array = array_reverse($array);
    foreach ($array as $item){
    	if ($item%2==0){
    		$count++;
    	}
    }
    if ($count>0) {
    	echo 'No';
    }
    else {
    	echo 'Yes';
    }
}
func(79597973);
?>