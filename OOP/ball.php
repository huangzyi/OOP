<?php
/**
 * Created by PhpStorm.
 * User: huangzyi
 * Date: 2015/12/18
 * Time: 1:06
 */
header("Content-type:text/html;charset=utf-8");
$question=<<<GOD
(1)一小球在10米高的地方抛出，1s后小球的二维坐标(g=10);</br>
(2)一小球在10米高的地方抛出，水平初速度初速度1m/s，1s后小球的二维坐标(g=10);</br>
(3)一小球在10米高的地方抛出，水平初速度初速度1m/s，垂直向上的初速度10m/s,1s后小球的二维坐标(g=10);</br>
GOD;
echo $question;
class ball{
    const g=10;
    public static $h =10;
    public $ballname;
    public $t;
    public $x;
    public $y;
    public $vx;
    public $vy;
    function down(){
        $t=$this->t;
        $vy=$this->vy;
        $this->y=$vy*$t+self::$h-self::g*$t*$t/2;
    }
    function horizontal(){
        $t=$this->t;
        $vx=$this->vx;
        $this->x=$vx*$t;
    }
    function coordinate(){
        $this->down();
        $this->horizontal();
        echo "$this->ballname".'的坐标是'.'('."$this->x".','."$this->y".')。'."</br>";
    }
    function __construct($ballname,$t,$vx,$vy){
        $this->ballname=$ballname;
        $this->t=$t;
        $this->vx=$vx;
        $this->vy=$vy;
        $this->coordinate();
    }

    function _destruct(){
        $this->ballname=null;
        $this->t=null;
        $this->vx=null;
        $this->vy=null;
    }

}
$ball_1=new ball("球1",1,0,0);
$ball_2=new ball("球2",1,1,0);
$ball_3=new ball("球3",1,1,10);
