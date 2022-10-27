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
            echo "largest value=20";
        }
        elseif ($this->y > $this->z)
        {
            echo "largest value=30";
        }
        elseif ($this->z > $this->x)
        {
            echo "largest value=40";
        }
        else{
            echo "eror";
        }


    }


}