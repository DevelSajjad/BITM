<?php

require_once "vendor/autoload.php";
//use App\classes\Example;
//
//$example = new Example();
//$example->index();

use App\classes\fullName;
$fullName= new fullName($_POST);
$fullName->index();
