<?php

namespace App\classes;

class DoWhile
{
    public $massage,$i;
    public function __construct()
    {
        $this->massage='Hello World';
    }
    public function index()
    {
        $this->i=20;
        do
        {
            echo $this->i;
            $this->i++;

        }while($this->i < 25);

    }

}