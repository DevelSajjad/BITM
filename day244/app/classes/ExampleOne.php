<?php


namespace App\classes;


abstract class ExampleOne
{
    public $hello = "Billu";
    protected $helloOne = "Mera";
    private $helloTwo = "Dost";

    public function helloFour()
    {
        echo 'hello four';
    }

    abstract function helloFive();
}