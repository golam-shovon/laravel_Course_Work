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
	public function deletecourse($Course)
	{
		if (($key = array_search($Course->name, $this->courlist)) !== false)
		{
		unset($this->courlist[$key]);
		$this->balance=$this->balance+10000;
		}

        if (($key = array_search($this->name, $Course->student_list)) !== false)
        {
            unset($Course->student_list[$key]);
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
echo'before any course student balance'.'<br>';
echo $studentOne->getballance()."<br>";
echo $studentTwo->getballance()."<br>";
echo $studentThree->getballance()."<br>";
$studentOne->addcourse($c1);
$studentOne->addcourse($csharp);
$studentOne->addcourse($cplusplus);
$studentTwo->addcourse($csharp);
$studentTwo->addcourse($c1);
$studentTwo->addcourse($cplusplus);
$studentThree->addcourse($csharp);
$studentThree->addcourse($c1);
$studentThree->addcourse($cplusplus);

echo'after adding three courses to all students'.'<br>';
print_r($studentOne->getcourse());
echo $studentOne->getballance();
print_r($studentTwo->getcourse());
echo $studentTwo->getballance();
print_r($studentThree->getcourse());
echo $studentThree->getballance();
echo 'dropping one course php from student one';
$studentOne->deletecourse($c1);
print_r($studentOne->getcourse());
echo $studentOne->getballance();
echo 'dropping one course c# from student three';
$studentThree->deletecourse($csharp);
print_r($studentThree->getcourse());
echo $studentThree->getballance();
echo 'php course student details';
print_r($c1->getcoursestudent());











