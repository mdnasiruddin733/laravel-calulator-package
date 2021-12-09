<?php

namespace Webpane\Nestedset\Classes;

class Calculator{
    protected $result;
    function __construct()
    {
        $this->result=0;
    }
    public function add(...$numbers){
        $this->result+=array_sum($numbers);
        return $this;
    }

    public function subtract($number1,$number2){
        $this->result+=$number1-$number2;
        return $this;
    }
    public function multiply($number1,$number2){
        $this->result+=$number1*$number2;
        return $this;
    }
    public function devide($num1,$num2){
         $this->result+=$number1/$number2;
         return $this;
    }
    public function get(){
        return $this->result;
    }
}
