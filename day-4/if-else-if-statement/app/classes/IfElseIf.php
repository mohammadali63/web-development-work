<?php

namespace App\classes;

class IfElseIf
{
    public $x,$y,$z,$Hello;
    public function __construct()
    {
        $this->Hello="Hello World";
        $this->x=20;
        $this->y=30;
        $this->z=40;
    }
    public function index()
    {
        if ($this->x > $this->y)
        {
            echo "hello world";
        }
        elseif ($this->y > $this->z)
        {
            echo "hello bitm";
        }
        elseif ($this->z > $this->x)
        {
            echo "hello bangladesh";
        }
        else{
            echo "eror";
        }


    }


}