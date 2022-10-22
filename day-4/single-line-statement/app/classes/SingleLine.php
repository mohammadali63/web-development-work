<?php

namespace App\classes;

class SingleLine
{
    public $massage,$x,$y;
    public function __construct()
{
   $this->massage="Hello World";
   $this->x="Mohammad";
   $this->y="Ali";
}
    public function index()
    {
        echo $this->massage;
        echo '<br>';
        echo $this->x,$this->y;
    }

}