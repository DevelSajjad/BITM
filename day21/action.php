<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;
use App\classes\oddeven;
use App\classes\Prime;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET ['pages'] == 'prime')
    {
        include "pages/prime.php";
    }
} elseif (isset($_POST['btn']))
    {
        $calculator = new Calculator($_POST);
        $result = $calculator->index();
        include 'pages/home.php';

    }

elseif (isset($_POST['btnn']))
{
    $Oddeven = new oddeven($_POST);
    $resultt = $Oddeven->index();
    include 'pages/home.php';

}
elseif (isset($_POST['primebtn']))
{
    $prime = new prime($_POST);
    $result = $prime->index();
    include 'pages/prime.php';

}
