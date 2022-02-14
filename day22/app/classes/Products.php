<?php


namespace App\classes;


class Products
{
    protected $allProducts;
    protected $result = [];
    public function index()
    {
        return[
            0=> [
              'id'=>1,
                'category_id'=> 1,
              'name'=> 'T-Shirt',
              'price'=> 700,
              'description'=> 'product description',
              'image'=> 'assets/img/t1.jpg'
            ],

            1=> [
                'id'=>2,
                'category_id'=> 1,
                'name'=> 'T-Shirt1',
                'price'=> 900,
                'description'=> 'product description',
                'image'=> 'assets/img/t2.jpg'
            ],

            2=> [
                'id'=>3,
                'category_id'=> 1,
                'name'=> 'T-Shirt2',
                'price'=> 800,
                'description'=> 'product description',
                'image'=> 'assets/img/t3.jpg'
            ],

            3=> [
                'id'=>4,
                'category_id'=> 1,
                'name'=> 'Pants',
                'price'=> 1700,
                'description'=> 'product description',
                'image'=> 'assets/img/p1.jpg'
            ],

            4=> [
                'id'=>5,
                'category_id'=> 2,
                'name'=> 'Woman Sharee',
                'price'=> 10700,
                'description'=> 'product description',
                'image'=> 'assets/img/s1.jpg'
            ],

            5=> [
                'id'=>6,
                'category_id'=> 2,
                'name'=> 'Woman Sharee',
                'price'=> 11700,
                'description'=> 'product description',
                'image'=> 'assets/img/s2.jpg'
            ],

            6=> [
                'id'=>7,
                'category_id'=> 2,
                'name'=> 'Woman Sharee',
                'price'=> 10700,
                'description'=> 'product description',
                'image'=> 'assets/img/s3.jpg'
            ],

            7=> [
                'id'=>8,
                'category_id'=> 3,
                'name'=> 'Kids Tshirt',
                'price'=> 700,
                'description'=> 'product description',
                'image'=> 'assets/img/k1.jpg'
            ],

            8=> [
                'id'=>9,
                'category_id'=> 3,
                'name'=> 'Kids Tshirt',
                'price'=> 700,
                'description'=> 'product description',
                'image'=> 'assets/img/k2.jpg'
            ],

            9=> [
                'id'=>10,
                'category_id'=> 3,
                'name'=> 'Kids Tshirt',
                'price'=> 700,
                'description'=> 'product description',
                'image'=> 'assets/img/k3.jpg'
            ]
        ];
    }
    public function shortProducts ($categoryId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['category_id'] == $categoryId)
            {
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }

    public function getProductDetails($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product )
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }

    }
}