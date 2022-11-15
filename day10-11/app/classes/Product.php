<?php

namespace App\classes;

class Product
{
    public $products = [];
    public $data =[];

    public function __construct()
    {
        $this->products =[
            0=>[
                'id'                => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '2.jpg',
                
            ],
            1=>['id'                => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            2=>['id'                => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            3=>['id'                => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            4=>['id'                => 1,
                'category_id'       => 1,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            5=>['id'                => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            6=>['id'                => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            7=>['id'                => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            8=>['id'                => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            9=>['id'                => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            10=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            11=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            12=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            13=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            14=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            15=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            16=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            17=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            18=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            19=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            20=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            21=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            22=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            23=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            25=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            26=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            27=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            28=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            29=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            30=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            31=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            33=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            34=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            35=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            36=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            37=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            38=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            39=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            40=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            41=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            42=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            43=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            44=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            45=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            46=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            47=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            48=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            49=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '1.jpg',
                ],
            50=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => '2.jpg',
                ],
        ];
        return $this->products;
    }

    public function getProductByBrandId($brand_id)
    {
        foreach ($this->products as $product)
        {
            if ($product['brand_id'] == $brand_id)
            {
                array_push($this->data, $product );
            }
        }
        return $this->data;
    }
}