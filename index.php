<html>
	<body>
			<ul>
			<li><strong>Посчитать длину массива: </strong>
<?php
	$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
		echo count($arr);
		?>
			</li>
			<li><strong>Переместить первые 4 элемента массива в конец массива: </strong>
<?php
	$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
		var_export(array_reverse($arr));
?>	
			</li>
			<li><strong>Получить сумму 4,5,6 элемента: </strong>
<?php
	$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
	list($a, $b, $c, $d, $e, $f, $g, $k, $l) = $arr;
		echo $d + $e + $f;
?>
			</li>
			<li><strong>Найти все элементы которые отсутствуют в первом массиве и присутствуют во втором: </strong>
<?php
	$firstArr = [
		'one' => 1,
		'two' => 2,
		'three' => 3,
		'foure' => 5,
		'five' => 12,
];

	$secondArr = [
		'one' => 1,
		'seven' => 22,
		'three' => 32,
		'foure' => 5,
		'five' => 13,
		'six' => 37,
];
		var_export(array_diff($secondArr, $firstArr));
		?>
			</li>
			<li><strong>Найти все элементы которые присутствую в первом и отсутствуют во втором: </strong>
<?php
	$firstArr = [
		'one' => 1,
		'two' => 2,
		'three' => 3,
		'foure' => 5,
		'five' => 12,
];

	$secondArr = [
		'one' => 1,
		'seven' => 22,
		'three' => 32,
		'foure' => 5,
		'five' => 13,
		'six' => 37,
];
		var_export(array_diff($firstArr, $secondArr));
?>	


			</li>
			<li><strong>Найти все элементы значения которых совпадают: </strong>
<?php
	$firstArr = [
		'one' => 1,
		'two' => 2,
		'three' => 3,
		'foure' => 5,
		'five' => 12,
];

	$secondArr = [
		'one' => 1,
		'seven' => 22,
		'three' => 32,
		'foure' => 5,
		'five' => 13,
		'six' => 37,
];
	$result = array_intersect($firstArr, $secondArr);
		var_export($result);
?>	
			</li>
			<li><strong>Найти все элементы значения которых отличается: </strong>
<?php
	$firstArr = [
		'one' => 1,
		'two' => 2,
		'three' => 3,
		'foure' => 5,
		'five' => 12,
];

	$secondArr = [
		'one' => 1,
		'seven' => 22,
		'three' => 32,
		'foure' => 5,
		'five' => 13,
		'six' => 37,
];
	$result = array_diff($firstArr, $secondArr);
		var_export($result);
?>	
			</li>
			</ul>

	</body>
</html>