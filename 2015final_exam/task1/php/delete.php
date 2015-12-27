<?php
/**
 * Created by PhpStorm.
 * User: huangzyi
 * Date: 2015/12/27
 * Time: 11:22
 */
$id=$_POST['id'];
include "onload.php";
$delete ='delete from url where id="$id"';
$result3=$link->query($delete);
    if ($result3) {
        echo '删除成功';
        header("refresh:3;url = ../index.php");
    } else {
        echo '删除失败';
    }
header("refresh:3;url = ../index.php");

