<?php
require_once "vendor/autoload.php";

use App\classes\Category;

$category   = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
}
