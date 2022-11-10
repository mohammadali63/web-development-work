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
                'title'           =>  'Enlisting overzealous government officials: BNP leader Imran Saleh',
                'description'     =>  'BNP organizing secretary Syed Imran Saleh (Prince) said that overzealous government officials are being listed. The policemen have been indiscriminately shooting casualties, cases and arrests against the people including BNP without provocation. They will have to answer this one day....',
                'image'           =>  'n1.jpg',
            ],
            1=>[
                'id'              =>  1,
                'category_id'     =>  1,
                'title'           =>  'Farmers of 71 villages affected by chemical waste of Comilla EPZ',
                'description'     =>  'Crop production of farmers in 71 villages is being disrupted due to chemical liquid waste from factories inside the Comilla Export Processing Zone (EPZ). The water in ponds, rivers, canals, reservoirs and ponds in the area has turned black and smelly. As a result, fish production is also disrupted....',
                'image'           =>  'n2.jpg',
            ],
            2=>[
                'id'              =>  2,
                'category_id'     =>  2,
                'title'           =>  'Putin is not going to the G-20 conference',
                'description'     =>  'Russian President Vladimir Putin is not attending the G20 summit. The conference is going to be held in Bali, Indonesia next week. The Russian embassy in Jakarta told the news agency AFP today that Putin will not participate.....',
                'image'           =>  'in1.jpg',
            ],
            3=>[
                'id'              =>  3,
                'category_id'     =>  3,
                'title'           =>  'All the records that Hales broke in Adelaide',
                'description'     =>  'World Cup semi-final, target 169 runs. Even in the middle of the match, it was thought that it was going to be a great fight. However, Englands two openers, Jos Buttler and Alex Hales, did not care about the Indian bowlers at the Adelaide Oval. All records broken in Englands 10-wicket win...',
                'image'           =>  's3.jpg',
            ],
            4=>[
                'id'              =>  4,
                'category_id'     =>  4,
                'title'           =>  'What does the IMF loan mean for Bangladesh?',
                'description'     =>  'This fiscal year alone, the Bangladesh Bank has supplied more than $4.5 billion to the market to support the exchange rate, while the import bill averages $6 billion a month....',
                'image'           =>  'e1.jpg',
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