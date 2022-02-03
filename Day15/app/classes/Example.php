<?php
    namespace App\classes;
class Example
{
    public $firstNumber =10.5;
    public $firstName;
    public $lastName;
    public function index()
    {
        $this->firstName="Sajjad";
        $this->lastName="Hossain";
        echo $this->firstNumber;
        echo '<br/>';
        echo $this->firstName;
        echo '<br/>';
        echo $this->lastName;
        echo '<br/>';
        echo $this->firstNumber;
        echo '<br/>';
        echo $this->firstName."\t".$this->lastName;
    }
}