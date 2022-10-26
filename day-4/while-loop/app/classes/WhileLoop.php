<?php

namespace App\classes;

class WhileLoop
{
    public $massage,$i;
    public function __construct()
    {
        $this->massage='Hello World';
    }
    public function index()
    {
        $this->i=100;
        while ( $this->i < 110)
        {
            echo $this->i,'';
            $this->i++;

        }

    }

}