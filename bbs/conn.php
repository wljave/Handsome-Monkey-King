<?php
/**
*连接数据库配置文件
*/
//预定义数据库连接参数
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname ='test';
//连接到数据库
$db = new mysqli($host,$user,$password,$dbname);
//var_dump($db);
//判断是否连接成功
if($db->connect_errno != 0){
  die("连接失败！");
  die($db->connect_errno);
  exit;
}
/**
*设定数据库数据传输的编码
*/
$db->query("set names utf8");
?>
