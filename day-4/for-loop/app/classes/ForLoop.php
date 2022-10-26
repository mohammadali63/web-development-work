<?php

namespace App\classes;

class ForLoop
{
    public $massage,$i;
    public function __construct()
    {
        $this->massage="Hello World" ;
    }
    public function index()
    {
        for ($this->i=30; $this->i >=20; $this->i--)
        {
            echo $this->i,'<br/>';
        }

}

}