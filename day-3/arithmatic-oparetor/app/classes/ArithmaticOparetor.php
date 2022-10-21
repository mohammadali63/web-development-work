<?php

namespace App\classes;

class ArithmaticOparetor
{
    public $x,$y;
    public function __construct()

{
    $this->x=10;
    $this->y=20;
}
    public function index()
{
    echo $this->x + $this->y;//30
    echo '<br>';
    echo $this->x - $this->y;//-10
    echo '<br>';
    echo $this->x * $this->y;//200
    echo '<br>';
    echo $this->x / $this->y;//0.5
    echo '<br>';
    echo $this->x % $this->y;//10
    echo '<br>';
    echo $this->x++;//10
    echo '<br>';
    echo ++$this->x;//12
    echo '<br>';
    echo $this->x--;//12
    echo '<br>';
    echo --$this->x;//10
    echo '<br>';


    //*oparetor in php
    //       * arithmatic oparetor
    //          *+,_ * ,/,%,++,__;
}


}