<?php

//session_start();
//
//echo session_id();


//$_SESSION['name'] = 'BITM';
//$_SESSION['city'] = 'Dhaka';
//$_SESSION['country'] = 'Bangladesh';
//$_SESSION['mobile'] = +8801719046;

require_once 'vendor/autoload.php';
 use App\classes\Student;
//use App\classes\Home;
//$home = new Home();
//$home->index();

$student = new Student();
$student->manage();