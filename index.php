<html>
	<body>
		<h3>Действия с числами</h3>
			<ul>
			<li><strong>Получить остаток деления 7 на 3: </strong>
<?php
	$int1 = 7;
	$int2 = 3;
		echo ($int1 % $int2)."\n";
		?>
			</li>
			<li><strong>Получить целую часть сложения 7 и 7,15: </strong>
<?php
	$int1 = 7;
	$float1 = 7.15;
		echo $int1 + (int)$float1;
?>	
			</li>
			<li><strong>Получить корень из 25: </strong>
<?php
	$int1 = 25;
		echo bcsqrt($int1);
?>	
			</li>
			</ul>
		
		<h3>Действия со строками</h3>
			<ul>
			<li><strong>Получить 4-е слово из фразы - Десять негритят пошли купаться в море: </strong>
<?php
	$str = 'Десять негритят пошли купаться в море';
	$pieces = explode(" ", $str);
		echo $pieces[3];
		?>
			</li>
			<li><strong>Получить 17-й символ из фразы - Десять негритят пошли купаться в море: </strong>
<?php
	$str = 'Десять негритят пошли купаться в море';
		echo mb_strimwidth($str, 16, 1);
?>	
			</li>
			<li><strong>Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море: </strong>
<?php
	$str = 'Десять негритят пошли купаться в море';
	$str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
		echo $str;
?>	
			</li>
			<li><strong>Посчитать длину строки - Десять негритят пошли купаться в море: </strong>
<?php
	$str = 'Десять негритят пошли купаться в море';
		echo mb_strlen($str);
?>	
			</li>
			</ul>
		
		<h3>Действия с логическими значениями</h3>
			<ul>
			<li><strong>Правильно ли утверждение true равно 1: </strong>
<?php
	$boolTrue = true;
	$int = 1;
	if ($boolTrue == $int) {
		echo "True"; 
	}
		?>
			</li>
			<li><strong>Правильно ли утверждение false тождественно 0: </strong>
<?php
	$boolFalse = false;
	$int = 0;
	if ($boolFalse !== $int) {
		echo "False"; 
	}
?>	
			</li>
						<li><strong>Какая строка длиннее three - три: </strong>
<?php
	$str1 = 'three';
	$str2 = 'три';
	if (strlen($str1) > mb_strlen($str2)) {
		echo "$str1"; 
	}
?>	
			</li>
						<li><strong>Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2: </strong>
<?php
	$str1 = '125 умножить на 13 плюс 7';
	$str2 = '223 плюс 28 умножить 2';
	$int1 = 125;
	$int2 = 13;
	$int3 = 7;
	$int4 = 223;
	$int5 = 28;
	$int6 = 2;
	if ($int1 * $int2 + $int3 > $int4 + $int5 * $int6) {
		echo "$str1";
	}
?>	
			</li>
			</ul>
	</body>
</html>