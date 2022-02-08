<?php


namespace App\classes;


class fullName
{
    public $firstName;
    public $lastName;
    protected $fullName;
    public function __construct($data)
    {
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->firstName=$data['firstname'];
        $this->lastName=$data['lastname'];
    }

    public function index(){
        header('Location: action.php?pages=full-name');
    }
    public function getfullName ()
    {
        $this->fullName= $this->firstName.' '. $this->lastName;
        return $this->fullName;
    }
}