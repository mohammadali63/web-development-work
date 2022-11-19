<?php
require_once 'vendor/autoload.php';

use App\classes\FullName;
use App\classes\Calculator;

$result='';

if (isset($_GET['page']))
{
    if ($_GET['page']== 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page']='calculator')
    {
        include 'pages/calculator.php';

    }
}
elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName($_POST);
    $result = $fullName->getFullName();
    include 'pages/home.php';
}

elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();

    include 'pages/calculator.php';
}
