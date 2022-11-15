<?php

namespace App\classes;

class Brand
{
    public $brand=[];
    public function __construct()
    {
        $this->brand =[
            0=>[
                'id' => 1,
                'name' => 'Samsung'
            ],
            1=>[
                'id' => 2,
                'name' => 'Acer'
            ],
            2=>[
                'id' => 3,
                'name' => 'HP'
            ],
            3=>[
                'id' => 4,
                'name' => 'Dell'
            ],
            4=>[
                'id' => 5,
                'name' => 'Lenevo'
            ],
        ];
        return $this->brand;
    }


}