<?php


namespace App\classes;


class product
{

    public function getAllProduct()
    {
        return[
            0=> [
                'id' =>1,
                'name'=> 'New Product',
                'price'=> '4500',
                'description'=> 'description',
                'image'=> '1.jpg'
            ],

            1=> [
                'id' =>2,
                'name'=> 'New Product1',
                'price'=> '5500',
                'description'=> 'description1',
                'image'=> '2.jpg'
            ],

            2=> [
                'id' =>3,
                'name'=> 'New Product2',
                'price'=> '7500',
                'description'=> 'description2',
                'image'=> '3.jpg'
            ]
        ];
    }
}