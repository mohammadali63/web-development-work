<?php

namespace App\classes;

class HelloWorld
{
    public $hello;
    public function __costroct()
    {
        $this->hello='Hello World';
    }
    public function index()
    {
        echo $this->hello;
    }

}