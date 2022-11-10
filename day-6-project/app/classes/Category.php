<?php


namespace App\classes;


class Category
{
    public $categories=[];

    public function __construct()
    {
        $this->categories=[
            0  => [
                'id'=>1,
                'name'=>'national'
            ],
            1  => [
                'id'=>2,
                'name'=>'International',
            ],
            2  => [
                'id'=>3,
                'name'=>'Spots',
            ],
            3  => [
                'id'=>4,
                'name'=>'Entertainment',
            ],
        ];
    }
    public function getAllCategory()
    {
        return $this->categories;
    }

}