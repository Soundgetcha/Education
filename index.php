<?php

echo "1) Создать родительский (главный класс). Класс должен содержать 2 свойства. Каждое свойство должно иметь геттеры и сеттеры. ";
echo '<br>';

class First 
{
	protected $tip = 10;
	protected $top =  100;
	
	public function getTip()
	{
		return $this->tip;
	}
	
		public function getTop()
	{
		return $this->top;
	}
	
	public function setTip($value)
	{
		$this->tip = $value;
	} 
	
		public function setTop($value)
	{
		$this->top = $value;
	} 
}
$first = new First;
var_export ($first); 
echo '<br>';

echo "2) Создать 3 наследника родительского класса. Каждый наследник должен содержать одно свойство. Каждое свойство должно иметь геттер и сеттер. Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными. Один наследник не должен быть наследуемым. Один из наследников должен содержать абстрактную функцию возведения в степень ";
echo '<br>';

class Second extends First
{
	public $tip1 = 33;
	
	public function getTip1()
	{
		return $this->tip1;
	}
	
	public function setTip1($value)
	{
		$this->tip1 = $value;
	} 
		public function sumTip()
	{
		return $this->tip + $this->tip1;
	}
}
$second = new Second;
echo $second->sumTip();
echo '<br>';



class Third extends First
{
	public $tip2 = 66;
	
	public function getTip2()
	{
		return $this->tip2;
	}
	
	public function setTip2($value)
	{
		$this->tip2 = $value;
	} 
	
		public function multTip()
	{
		return $this->tip * $this->tip2;
	}
}
$third = new Third;
echo $third->multTip();
echo '<br>';


class Fourth extends First
{
	Private $tip3 = 88;
	
	public function getTip3()
	{
		return $this->tip3;
	}
	
	public function setTip3($value)
	{
		$this->tip3 = $value;
	} 
	
		public function divTip()
	{
		return $this->tip3 / $this->tip;
	}
	
		public function expoTip3()
	{
		return $this->tip3 ** 2;
	}
}
$fourth = new Fourth;
echo $fourth->divTip();
echo '<br>';

$fourth = new Fourth;
echo $fourth->expoTip3();
echo '<br>';
?>

