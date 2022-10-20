<?php

namespace App\classes;

class HelloWorld
{
public $massage,$massage1;
public function __construct($data)
{
$this ->massage="Name:Mohammad Ali";
$this ->massage1=$data;
}
public function index()
{
    echo $this->massage.' '. $this->massage1;
}

}