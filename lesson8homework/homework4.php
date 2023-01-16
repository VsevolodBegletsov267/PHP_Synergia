<?php
function delElem($a, $arr){
	foreach ($arr as $key => $item) {
		if ($a==$item){
			unset($arr[$key]);
			}
		}
	var_dump($arr); 
	} 
delElem(5, [1,2,5,6]);
?>