<?php

namespace Router\Supertest;

class Router 
{

	protected $var = 55;
	
	public function getVar()
	{
		return $this->var;
	}
	
	public function setVar($value)
	{
		$this->var = $value;
	}
	
	 	public function run()
	{
		var_export($this->var);
	}
}
$router = new Router;
var_export($router);

?>