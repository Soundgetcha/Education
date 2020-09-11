<?php

echo "1) Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение, если данные не переданы то вывести соответствующее сообщение. <br />";
$var = [1990, 56, "face", 14.1];
	function type($var)
	{
		if(null==$var) {
			echo "Данные не переданы";
		}
		foreach ($var as $value) {
			echo gettype($value), "\n";
		}
	}
	type($var);



echo "<br> 2) Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false. <br />";
$var = "baby boom bada boom";

	function text($var)
{
	if(gettype($var)=="string") 
	{
	preg_match_all('/b/', $var, $matches);
		echo 'Ответ: ' .  count($matches[0]) ."<br />";
	}
	else 
	{
	echo 'Ответ: ' .   "false"  ."<br />";
	}
}
	text($var);


echo "3) Создать функцию которая считает сумму значений всех элементов массива произвольной глубины. <br />";

	function cout($var)
{
$arr = [
  'type1' => 5,
  'type2' => [
    'section1' => 6,
	'section2' => 14,
	'section3' => 35,
  ],
  'type3' => [
	'section10' => 56,
	'section11' => 13,
  ],
  'type4' => 3,
  'type5' => [
   'section21' => 23,
   'section22' =>7,
   'section23' => 27,
],  
];

    $totalSum = 0;
    foreach ($arr as $key => $value) {
        if (is_array($arr[$key])) 
			foreach($arr[$key] as $key1 => $value1)
		{
           $totalSum += $value1;
        } else {
           $totalSum += $value;
        }
    };
    echo  'Ответ: ' .   $totalSum;
    return $totalSum;
}
cout($var);
?>