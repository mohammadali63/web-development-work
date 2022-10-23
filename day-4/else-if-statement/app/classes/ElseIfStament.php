<?php

namespace App\clsses;

class ElseIfStament
{
    public $x,$y,$z;
    public function __construct()
    {
        $this->x=20;
        $this->y=30;
        $this->z=40;
    }
    public function index()
    {
        if ($this->x > $this->y)
        {
            echo "largest number is x=20";
        }
        elseif($this->y > $this->z)
        {
            echo "largest number is y=30";
        }
        elseif($this->z > $this->x)
        {
            echo "largest number is y=30";
        }
        else{
            echo "Eror";
        }


    }


}