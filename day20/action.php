<?php
require_once 'vendor/autoload.php';
use App\classes\series;
use App\classes\product;
if (isset($_GET['pages']))
{
    if($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['pages'] == 'all-product')
    {
        $product= new product();
        $product->$product->getAllProduct();
        include 'pages/product.php';
    }
} elseif (isset($_POST['btn']))
{
    $series= new series($_POST);
    $result=$series-> index();
    include 'pages/home.php';
}