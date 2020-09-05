<?php

$study = [1, 2, 3, "dog", "apple", "true"];
	//echo $study [3];
	
$study = [
    'one' => 1,
	'two' => 2,
	'three' => 3,
	'four' => 'dog',
	'five' => 'apple',
	'five' => 'prodigy',
	];
	
	
$study2 = [
    1,
	2,
	3,
	'three' => 3,
	'dog',
	'apple'
	];	
	
	//var_export($study + $study2); 
	
	//var_export(array_values($study + $study2));
	
	
$study3 = [
    'one' => 1,
	'two' => 2,
	'three' => 3,
	];	
	
$study4 = [
	'two' => 2,
	'three' => 3,
	'one' => 1,
	];	
	
$study5 = [

	'two' => 2,
	'one' => 1,
	'three' => 3,
	];	
	
	//echo $study3 ['two'];
	//echo $study4 ['two'];
	//echo $study5 ['two'];

$arr = array_values($study3);
$arr2 = array_values($study4);
$arr3 = array_values($study5);

 //echo $arr[1];
 //echo $arr2[1];
 //echo $arr3[1];
 

	//var_export(array_keys($study));
	
	//var_export(array_slice($study, 2, 4));
	
	
$study10 = [
	'one' => 1,
	'two' => [
	    'one' => 1,
		'two' => 2,
		'three' => 3,
	],	
	'three' => 3,
	'four'  => [
		'one' => 1,
		'two' => 2,
		'three' => 3,
	]
	];
	 
	foreach($study10 as $key => $value) {
		if (is_array($study10[$key])) {
			foreach($study10[$key] as $key1 => $value1) {
				echo $value1;
			}
		} else {
			echo $value;
		}
	}
	
?>