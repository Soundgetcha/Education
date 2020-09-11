<?php

echo "1) Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение, если данные не переданы то вывести соответствующее сообщение. <br />";
$var = [1990, 56, "face", 14.1];
	function type($var) {
		if(null==$var) {
			echo 'Ответ: ' .   "Данные не переданы";
		} 
		else {
			echo 'Ответ: ' .   gettype($var), "\n";
		}
	}
	type($var);



echo "<br> 2) Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false. <br />";
$var = "baby boom bada boom";

	function text($var)
{
	if (gettype($var)=="string") { 
	preg_match_all('/b/', $var, $matches);
		echo 'Ответ: ' .  count($matches[0]) ."<br />";
	}
	else {
		echo 'Ответ: ' .   "false"  ."<br />";
	}
}
	text($var);

?>