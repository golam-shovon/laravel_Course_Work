<?php
class Account
{
    public $name;
    public $balance=0;
    function __construct($name,$balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }
    public function transferbalance($Account,$amount)
    {
        if($Account->balance >=$amount)
        {
            $this->balance=$this->balance+$amount;
            $Account->balance=$Account->balance-$amount;
            $t=$amount.' '.'transferred from'.' '.$Account->name.' '.'to'.' '.$this->name;
            return $t;
        }
       else
       {
           $t= ' transfer not possible';
           return $t;
       }
    }
    public  function getballance()
    {
        return $this->name.' '.'balance'.' '.$this->balance;
    }
}

$personOne=new Account('personOne',100000);
$personTwo=new Account('personTwo',500000);

echo'before  transfer balance'.'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo'transfer Started'.'<br>';
echo $personOne->transferbalance($personTwo,1500).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personTwo->transferbalance($personOne,400).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personTwo->transferbalance($personOne,8900).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personOne->transferbalance($personTwo,15600).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personTwo->transferbalance($personOne,15960).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personOne->transferbalance($personTwo,7800).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personTwo->transferbalance($personOne,450).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personOne->transferbalance($personTwo,2900).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personTwo->transferbalance($personOne,00).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";
echo $personOne->transferbalance($personTwo,1000).'<br>';
echo $personOne->getballance()."<br>";
echo $personTwo->getballance()."<br>";













