<?php

namespace App\classes;

class IfElse
{
    public $x,$y,$z;
    public function __construct()
    {
        $this->x=20;
        $this->y=30;
    }
    public function index()
    {
        if ($this->x > $this->y)
        {
            $this->z=$this->x + $this->y;
            echo $this->z;
        }
        else{
            echo "Eror";
    }
    }

}