<?php


namespace App\classes;


class Blog
{
    public $blogs=[];
    public $data=[];
    public function __construct()
    {
        $this->blogs = [
            0=>[
                'id'              =>  1,
                'category_id'     =>  1,
                'title'           =>  'This is national blog title one',
                'description'     =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book....',
                'ful-description' =>  'This is national bolg description one',
                'image'           =>  '1.jpg',
            ],
            1=>[
                'id'              =>  1,
                'category_id'     =>  1,
                'title'           =>  'This is national blog title two',
                'description'     =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book....',
                'ful_description' =>  'This is national bolg description two',
                'image'           =>  '2.jpg',
            ],
            2=>[
                'id'              =>  2,
                'category_id'     =>  2,
                'title'           =>  'This is international blog title three',
                'description'     =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book....',
                'ful_description' =>  'This is international bolg description three',
                'image'           =>  '3.jpg',
            ],
            3=>[
                'id'              =>  3,
                'category_id'     =>  3,
                'title'           =>  'This is spots blog title foor',
                'description'     =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book....',
                'ful_description' =>  'This is spots bolg description foor',
                'image'           =>  '4.jpg',
            ],
            4=>[
                'id'              =>  4,
                'category_id'     =>  4,
                'title'           =>  'This is entertainment blog title five',
                'description'     =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book....',
                'ful_description' =>  'This is entertainment bolg description five',
                'image'           =>  '5.jpg',
            ],
        ];
    }
    public function getAllBlog()
    {
        return $this->blogs;
    }
    public function getBlogByCategoryId($id)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['category_id'] == $id)
            {
                array_push($this->data,$blog);
            }
        }
        return $this->data;
    }


}