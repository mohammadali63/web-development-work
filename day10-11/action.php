<?php
require_once "vendor/autoload.php";
use App\classes\Product;
use App\classes\Category;
use App\classes\Brand;

$brand = new Brand();
$brands = $brand->brand;

$category = new Category();
$categories = $category->categories;

$product= new Product();
$products = $product->products;


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'brand')
    {
        $brand_id = $_GET['id'];
        $brand_product = $product->getProductByBrandId($brand_id);
        include 'pages/brand.php';
    }
    elseif ($_GET['page'] =='category')
    {
        $category_id= $_GET['id'];
        $categoriespage = $product->getProductByCategoryId($category_id);
        include 'pages/category.php';

    }
}
