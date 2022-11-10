<?php


namespace App\classes;
use App\classes\Category;


class Home
{
    public $category,$categories;
    public function index()
    {

        header('Location: action.php?page=home');
    }

}