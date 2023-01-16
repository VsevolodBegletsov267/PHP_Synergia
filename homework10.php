<?php
function func($inp){
    $one=$inp%10;
    $two=$inp%100;
    $two=$two-$one;
    $three=$inp-$two;
    $three=$three-$one;

	$converter1=[
		1 => 'один',  
	    2 => 'два',     
	    3 => 'три',     
	    4 => 'четыре',  
	    5 => 'пять',    
	    6 => 'шесть', 
	    7 => 'семь',    
	    8 => 'восемь',  
	    9 => 'девять'];
	$converter2=[
		10 => 'десять',      
	    20 => 'двадцать',    
	    30 => 'тридцать',  
	    40 => 'сорок',      
	    50 => 'пятьдесят', 
	    60 => 'шестьдесят',
	    70 => 'семьдесят',
	    80 => 'восемьдесят',
	    90 => 'девяносто',];
	$converter3=[
	    100 => 'сто',
	    200 => 'двести',
	    300 => 'триста',
	    400 => 'четыреста',
	    500 => 'пятьсот',
	    600 => 'шестьсот',
	    700 => 'семьсот',
	    800 => 'восемьсот',
	    900 => 'девятьсот']; 
	$converter4=[
        11 => 'одиннадцать',
        12 => 'двенадцать',
        13 => 'тринадцать',
        14 => 'четырнадцать',
        15 => 'пятнадцать',
        16 => 'шестнадцать',
        17 => 'семнадцать',
        18 => 'восемнадцать',
        19 => 'девятнадцать'
	    ];
$four=$one+$two;
if ($three==0){
	if ($four>10) {
		if ($four<20){
			$value2=strtr($four, $converter4);
			echo $value2;
		}
	}
	elseif ($one>0){
		$value1=strtr($one, $converter1);
		$value2=strtr($two, $converter2);
		echo $value2.'&nbsp'.$value1;
	}
}
elseif($three==0){
    if($two==0){
		$value1=strtr($one, $converter1);
		echo $value1;
	}
	elseif ($one==0) {
		$value2=strtr($two, $converter2);
		echo $value2;
	}
}
elseif ($two==0) {
	if ($one==0) {
		$value3=strtr($three, $converter3);
		echo $value3;
	}
	else{
		$value3=strtr($three, $converter3);
		$value1=strtr($one, $converter1);
		echo $value3.'&nbsp'.$value1;
	}
}
elseif ($one==0) {
	if ($two==0) {
		$value3=strtr($three, $converter3);
		echo $value3;
	}
	elseif ($three==0) {
		$value2=strtr($two, $converter2);
		echo $value2;
	}
	else{
		$value3=strtr($three, $converter3);
		$value2=strtr($two, $converter2);
		echo $value3.'&nbsp'.$value2;
	}
}
else{
	if ($four>10) {
		if ($four<20) {
		$value3=strtr($three, $converter3);
		$value2=strtr($four, $converter4);
		echo $value3.'&nbsp'.$value2;
		}
        else{
	    $value1=strtr($one, $converter1);
	    $value2=strtr($two, $converter2);
	    $value3=strtr($three, $converter3);
	    echo $value3.'&nbsp'.$value2.'&nbsp'.$value1;
}
}
}
}
func(26);
?>