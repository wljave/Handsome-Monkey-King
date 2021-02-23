<?php
session_start();
/**
*退出处理页面
*/
if($_SESSION['login'] = 1){
  unset($_SESSION['id']);
  unset($_SESSION['name']);
  echo "<a onclick='alert('退出成功！')'</a>";
  header("Location: login.html");
  exit;
}
?>
