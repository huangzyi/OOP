<?php
/**
 * Created by PhpStorm.
 * User: huangzyi
 * Date: 2015/12/18
 * Time: 1:43
 */
header("Content-type:text/html;charset=utf-8");
class cal{
    public $a;
    public $b;
    function add(){
        $a=$this->a;
        $b=$this->b;
        $num=$a+$b;
        echo "$a"."+"."$b"."="."$num"."</br>";
    }
    function minus(){
        $a=$this->a;
        $b=$this->b;
        $num=$a-$b;
        echo "$a-$b=$num</br>";
    }
    function multiply(){
        $a=$this->a;
        $b=$this->b;
        $num=$a*$b;
        echo "$a*$b=$num</br>";
    }
    function divide(){
        $a=$this->a;
        $b=$this->b;
        $num=$a/$b;
        echo "$a/$b=$num</br>";
    }
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }

}
$cal=new cal(5,2);
$cal->add();
$cal->minus();
$cal->multiply();
$cal->divide();
