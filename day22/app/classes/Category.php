<?php


namespace App\classes;


class Category
{
    public  function index()
    {
        return[
          0=>[
              'id'=>1,
              'name'=>'Man Fasion'
          ],
          1=>[
              'id'=>2,
              'name'=>'Woman Fashion'
          ],
            2=>[
                'id'=>3,
                'name'=>'Kids Fashion'
            ]
        ];
    }
}