<?php
function func($inp1, $inp2){
	$array=[];
	if ($inp1>$inp2) {
	for($i=1; $i<=$inp1; $i++) {
		if ($inp1%$i==0){
			if ($inp2%$i==0){
				array_push($array, $i);
			}
		}
	}
}
    else{
	for($i=1; $i<=$inp2; $i++) {
		if ($inp1%$i==0) {
			if ($inp2%$i==0) {
		    array_push($array, $i);
			}
		}
	}
}
var_dump($array);
}
func(150,300);
?>