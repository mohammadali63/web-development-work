<?php

namespace App\classes;

class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
          0=>[
              'id'=>1,
              'name'=>'man fashion',
              'img'=>'1.jpg'
          ],
          1=>[
              'id'=>1,
              'name'=>'woman fashion',
              'img'=>'1.jpg'
          ],
          2=>[
              'id'=>1,
              'name'=>'Kids fashion',
              'img'=>'1.jpg'
          ],
          3=>[
              'id'=>1,
              'name'=>'Spots Gazets',
              'img'=>'1.jpg'
          ],
          4=>[
              'id'=>1,
              'name'=>'elictronic',
              'img'=>'1.jpg'
          ],
        ];
    }
    public function getAllCategory()
    {
        return $this->categories;
    }

}