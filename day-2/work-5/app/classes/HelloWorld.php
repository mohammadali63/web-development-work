<?php

namespace App\classes;

class HelloWorld
{
public $massage;
public function __construct()
{
$this ->massage="Name:Mohammad Ali";
}
public function index()
{
    echo $this->massage;
}

}