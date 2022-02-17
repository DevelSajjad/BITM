<?php


namespace App\classes;


trait ExampleTwo
{
    public $name = "sajjad";
    protected $cr = "rafi";
    private $mamun = "Mamun";

    public function santo()
    {
        echo 'hello s';
    }

    protected function maruf()
    {
        echo 'hello m';
    }
    private function shila()
    {
        echo 'hello s';
    }

}