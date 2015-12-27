<?php
header("Content-type:text/html;charset=utf-8");
interface content{
    public function content();
}
class cal implements content{
    public $a;
    public $b;
    const i="i";
    const A=0;
    function add($x,$y){
        $this->a=$x->a+$y->a;
        $this->b=$x->b+$y->b;
        echo "$x->num"."+"."$y->num"."=";
        $this->content();
    }
    function minus($x,$y){
        $this->a=$x->a-$y->a;
        $this->b=$x->b-$y->b;
        echo "$x->num"."-"."$y->num"."=";
        $this->content();
    }
    public function content(){
        $b=$this->b;
        if($b==self::A){
            echo $this->a."</br>";
        }else if($b<self::A){
            echo '$this->a'.'$this->b'.self::i."</br>";
        }else{
            echo "$this->a+$b".self::i."</br>";
        }
}
    /*
    function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }*/
}
class num extends cal{
    public $a;
    public $b;
    public $num;
    const i="i";
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
        $this->num="("."$a+$b".self::i.")";
    }
}
$num1=new num(5,2);
$num2=new num(1,2);
$cal=new cal();
$cal->add($num1,$num2);
$cal->minus($num1,$num2);
