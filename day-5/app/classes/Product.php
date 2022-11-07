<?php

namespace App\classes;

class Product
{
    public function allproduct(){
        return[
            0=>[
                'id'=>'1',
                'name'=>'paradoxical sajid',
                'price'=>'500',
                'img'=>'psajid.jpg',
            ],
            1=>[
                'id'=>'2',
                'name'=>'ikigai',
                'price'=>'500',
                'img'=>'ikigai.jpg',
            ],

            2=>[
                'id'=>'3',
                'name'=>'belapurabarage',
                'price'=>'500',
                'img'=>'bela.jpg',
            ],


        ];

    }

}