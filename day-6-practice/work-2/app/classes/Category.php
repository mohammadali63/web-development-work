<?php

namespace App\classes;

class Category
{
    public $categories = [];
    public function __construct()
    {
        $this->categories = [
            0=>[
                'id'    => 1,
                'name'  => 'National',
            ],
            0=>[
                'id'    => 2,
                'name'  => 'International',
            ],
            0=>[
                'id'    => 3,
                'name'  => 'Sports',
            ],
            0=>[
                'id'    => 4,
                'name'  => 'Economics'
            ],
        ];
    }
    public function getAllCategory()
    {
        return $this->categories;
    }

}