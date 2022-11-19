<?php
require_once 'vendor/autoload.php';

use App\classes\FullName;

if (isset($_GET['page']))
{
    if ($_GET['page']== 'home')
    {
        include 'pages/home.php';
    }
}
elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName($_POST);
    echo $fullName->getFullName();
}
