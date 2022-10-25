<?php

namespace App\classes;

class SwitchStatement
{
    public $massage,$x,$y,$z;
    public function __construct()
    {
        $this->massage="Hello World";
    }
    public function index()
    {
        $this->x=20;
        $this->y=30;
        $this->z=40;

        switch ($this->y)
        {
            case 10:
                echo "Hello World";
                break;

            case 20:
                echo "Hello Bangladesh";
                break;

            case 30:
                echo "Hello BITM";
                break;
        }



    }

}