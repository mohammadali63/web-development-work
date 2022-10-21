<?php

namespace App\classes;

class ConditionalOparetor
{
    public $x,$y,$z;
    public function __construct()
    {
        $this->x=10;
        $this->y='20';

    }

    public function index()
    {
        echo $this->x > $this->y; // 0
        echo '<br>';
        echo $this->x >= $this->y; // 0
        echo '<br>';
        echo $this->x < $this->y; // 1
        echo '<br>';
        echo $this->x <= $this->y; // 1
        echo '<br>';
        echo $this->x == $this->y; // 0
        echo '<br>';
        echo $this->x != $this->y; //1
        echo '<br>';
        echo $this->x === $this->y; // 0
        echo '<br>';
        echo $this->x !== $this->y; // 1
        echo '<br>';




//* conditional oparetor
//          * >,>=,<,<=,==,!=,.===,!==,
    }


}