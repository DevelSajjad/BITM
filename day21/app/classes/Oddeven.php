<?php


namespace App\classes;


class oddeven
{
    protected $number;
    protected $resultt;

    public function __construct($post=null)
    {
        if ($post)
        {
            $this->number = $post['odd_even'];
        }
    }

    public function index()
    {
        if ($this->number%2 == 0)
        {
            return $this->resultt='Even';
        }else{
            return $this->resultt ='Odd';
        }

    }
}