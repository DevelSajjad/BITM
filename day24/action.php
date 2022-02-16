<?php
require_once 'vendor/autoload.php';
use App\classes\FileUpload;
if (isset($_GET['pages']))
{
    if($_GET['pages'] == 'file-upload')
    {
        include 'pages/fileUpload.php';
    } elseif ($_GET['pages'] == 'view-students')
    {
        $fileUpload = new FileUpload();
        $fileUpload->getAllStudentsInfo();
        $students = $fileUpload->getAllStudentsInfo();
        include 'pages/viewStudents.php';
    }
} elseif (isset($_POST['btn']))
{
    $fileUpload = new FileUpload($_POST,$_FILES);
    $message = $fileUpload->index();
    include 'pages/fileUpload.php';
}