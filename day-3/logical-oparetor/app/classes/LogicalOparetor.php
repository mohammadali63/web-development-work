<?php

namespace App\classes;

class LogicalOparetor
{
    public $x,$y,$z;
    public function __construct()
    {
        $this->x=10;
        $this->y=20;
        $this->z=30;
    }
    public function index()
{
    echo $this->x > $this->y && $this->x < $this->z;
    echo '<br>';

    echo $this->x > $this->y || $this->x > $this->z;
    echo '<br>';

//* logical oparetor
//         * &&,!,||;
}

}