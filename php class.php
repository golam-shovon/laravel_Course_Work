<?php
/* Php class */
class Person 
{
	public $name;
	public $age;
	
	
	function __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
	}
	
	/* Php class Funtion */
	
	public function getname()
	{
		return $this->name;
	}
	
	public function setname($name)
	{
		$this->name=$name;
	}
	public function get()
	{
		return $this->name.$this->age;
	}
}
/* Php class inhertitaion */
class p2 extends Person
{
	function __construct($name,$age)
	{
		Parent::__construct($name,$age);
	}
}
$p1=new Person('gebon',45);
$p1->name="gebon";
echo $p1->name;
echo $p1->getname();
$t1=new person('sss',45);
echo $t1->name;
$p3=new p2('uu',48);
echo $p3->get();



