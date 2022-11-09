<?php
require_once "vendor/autoload.php";
use App\classes\Category;

$category = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['pages']))
{
    if ($_GET['pages']=='home')
    {
        include 'pages/home.php';
    }
}
