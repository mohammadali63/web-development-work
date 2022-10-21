<?php

namespace App\classes;

class AssignmentOparetor
{
    public $x,$y;
    public function __construct()
    {
        $this->x=10;
        $this->y=20;

    }
    public function index()
    {
        echo $this->x+=$this->y;//30
        echo '<br>';
        echo $this->x-=$this->y;//10
        echo '<br>';
        echo $this->x*=$this->y;//200
        echo '<br>';
        echo $this->x/=$this->y;//10
        echo '<br>';
        echo $this->x%=$this->y;//10
        echo '<br>';
        echo $this->x.=$this->y;//1020



        //assignment oparetor(* =,+=,-=,*=,%=,/=,.=;)
    }

}