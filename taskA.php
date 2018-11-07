<?php
class Course
{
	public $name;
	function __construct($name)
	{
		$this->name=$name;
	}
	
}
class Student
{
	public $name;
	public $balance=50000;
	public $courlist= [];
	function __construct($name)
	{
		$this->name=$name;
	}
	public function getcourse()
	{
		return $this->courlist;
	}
	public function addcourse($Course)
	{
		array_push($this->courlist,$Course->name);
        $this->balance-10000;
	}
	public function deletecourse($course)
	{
		if (($key = array_search($course, $array)) !== false) 
		{
		unset($array[$key]);
		$this->balance+10000;
		}
	}
	public function getballance()
	{
		return $this->balance;
	}
}
$studentOne=new Student('studentOne');
$studentTwo=new Student('studentTwo');
$studentThree=new Student('studentThree');


$c1=new Course('php');
$csharp=new Course('csharp');
$cplusplus=new Course('cplusplus');

echo $studentOne->getballance().'studentOne'.'before any course'.'\n';
echo $studentTwo->getballance().'studentTwo'.'before any course'.'\n';
echo $studentThree->getballance().'studentThree'.'before any course'.'\n';
$studentOne->addcourse($c1);
echo $studentOne->getcourse();








