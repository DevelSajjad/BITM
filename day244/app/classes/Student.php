<?php


namespace App\classes;

use App\classes\InterfaceClass;
use App\classes\ExampleOne;
class Student extends ExampleOne implements InterfaceClass
{

    use ExampleTwo;
    protected $country = 'Bangladesh';

    public function __construct()
    {
        $this->name = "BASIS";
        $this->city = "Mirput";
    }

    public function manage()
    {
//        echo $this->index();
        echo $this->helloOne;
        echo $this->shila();
    }

    public function one()
    {
        echo 'hello';
    }

    public function two()
    {
        echo 'two';
    }

    public function helloFive()
    {
        echo 'sdfa';
    }
}