<?php
class Course
{
	public $name;
	public $student_list=[];
	function __construct($name)
    {
        $this->name = $name;
    }
    public function getcoursestudent()
    {
        $string= json_encode(array_values($this->student_list)).' '.$this->name."<br>";
        return $string;
    }
    public function  getar()
    {
         $this->student_list;
    }
}
class Student
{
	public $name;
	public $balance=50000;
	public $courlist= array();
	function __construct($name)
	{
		$this->name=$name;
	}
	public function getcourse()
	{
		$string= json_encode(array_values($this->courlist)).' '.$this->name."<br>";
		return $string;
	}
	public function addcourse($Course)
	{
		array_push($this->courlist,$Course->name);
        array_push($Course->student_list,$this->name);
        $this->balance=$this->balance-10000;
	}
	public function deletecourse($course)
	{
		if (($key = array_search($course, $this->courlist)) !== false)
		{
		unset($this->courlist[$key]);
		$this->balance=$this->balance+10000;
		}
	}
	public function getballance()
	{
		$t='balance:'.' '. $this->balance.' '.$this->name.' '."<br>";
		return $t;
	}
}
$studentOne=new Student('studentOne');
$studentTwo=new Student('studentTwo');
$studentThree=new Student('studentThree');


$c1=new Course('php');
$csharp=new Course('csharp');
$cplusplus=new Course('cplusplus');

echo $studentOne->getballance().'before any course'.' '."<br>";
echo $studentTwo->getballance().'before any course'.' '."<br>";
echo $studentThree->getballance().'before any course'.' '."<br>";
$studentOne->addcourse($c1);
$studentOne->addcourse($csharp);
print_r($studentOne->getcourse());
echo $studentOne->getballance();
$studentOne->deletecourse($csharp->name);
echo $studentOne->getballance();
print_r($studentOne->getcourse());
print_r($c1->getcoursestudent());











