<?php

namespace App\classes;

class Hello
{
    public $massage,$student;
    public function __construct()
    {
        $this->massage='Hello World';

        $this->student=[
            0=>[
                'name'=>'mohammad',
                'phone'=>'08095785',
            ],
            1=>[
                'name'=>'ali',
                'phone'=>'080085',
            ],
        ];

    }
    public function index()
    {
        foreach ($this->student as $item){
            if (is_array($item)){
                foreach ($item as $value)
                {
                    echo $value;
                }
            }
        }


    }

}