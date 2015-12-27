<?php
/**
 * Created by PhpStorm.
 * User: huangzyi
 * Date: 2015/12/27
 * Time: 6:51
 */
header("Content-Type:text/html;charset=utf-8");
$link=mysqli_connect('127.0.0.1','root','')or exit("连接错误");
mysqli_query($link,"set names 'utf8'");//设置字符编码
mysqli_select_db($link,"website")or die('数据库连接失败');
$select ="select * from url";
$result1 = $link->query( $select);
//$result1 = mysqli_query($link, $select);
class network{
    public $id;
    public $name;
    public $url;
    function __construct($name,$url){
        $this->name=$name;
        $this->url=$url;
    }
    function content(){
        echo $this->name;
    }
    /*
    function add(){
        $name=$_POST['name'];
        $url=$_POST['url'];
        $insert = mysqli_query($link, "insert into url (name, url) VALUES (\"$name\",\"$url\")");
        if ($insert) {
            echo '添加成功';
            header("refresh:3;url = ../index.php");
        } else {
            echo '添加失败';
        }
    }
    */
}