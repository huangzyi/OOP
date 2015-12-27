<?php
/**
 * Created by PhpStorm.
 * User: huangzyi
 * Date: 2015/12/27
 * Time: 4:52
 */
$name=$_POST['name'];
$url=$_POST['url'];
include "onload.php";
$add ="$select where name=$name";
$exists = $link->query($add);
if($exists) {
    echo '该名字已存在';
    header("refresh:3;url = ../index.php");
}
else {
    $insert = $link->query("insert into url (name, url) VALUES (\"$name\",\"$url\")");
    if ($insert) {
        echo '添加成功';
    } else {
        echo '添加失败';
    }
    header("refresh:3;url = ../index.php");
}
