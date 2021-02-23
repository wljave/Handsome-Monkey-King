<?php
include_once('conn.php');
session_start();
/**
*删除留言页
*/
//需要登录后操作使用删除功能
 // var_dump($_SESSION['login']);exit;
if(isset($_SESSION['login']) === false){
  die('需要登录后操作！');
}

//强行将id转换成整型，避免SQL注入攻击
$id = (int)$_GET['id'];
if($id < 1){
  die('无效数据！');
}

$sql = "DELETE FROM jave_msg WHERE id='{$id}'";
$is = $db->query($sql);

header("Location: gbook.php");

$db->close();
?>
