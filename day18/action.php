<?php
    require_once 'vendor/autoload.php';
    use App\classes\fullName;

    if (isset($_GET['pages']))
    {
        if ($_GET['pages']== 'full-name')
        {
            include 'pages/full-name.php';
        }
    }
    elseif (isset($_POST['btn']))
    {
        $fullName= new fullName($_POST);
        $result= $fullName->getfullname();
        include 'pages/full-name.php';
    }