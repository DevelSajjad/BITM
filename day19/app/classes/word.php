<?php


namespace App\classes;


class word
{
    protected $inputValue;
    protected $result;
    protected $type;
    public function __construct($post=null)
    {

        $this->inputValue = $post['input_value'];
        $this->type = $post['type'];
    }

    public function index()
    {
//        if ($this->type == 'word')
//        {
//            $this->result = str_word_count($this->inputValue);
//        } else
//        {
//            $this->result = strlen($this->inputValue);
//        }
        $this->result = [
          'givenword' => 'givenword'. $this->inputValue,
          'wordcount' => 'totalword'. str_word_count($this->inputValue),
          'charactercount' => 'totalcharacter'. strlen($this->inputValue)
        ];
        return $this->result;
    }
}