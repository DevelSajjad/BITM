<?php
require_once 'vendor/autoload.php';
use App\classes\word;
if (isset($_GET['pages']))
{
    if ($_GET['pages'] =='home')
    {
        include 'pages/home.php';
    }
} elseif (isset($_POST['btn']))
{
    $word= new word($_POST);
    $result = $word->index();
    extract($result);
    include 'pages/home.php';
}