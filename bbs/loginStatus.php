<?php
session_start();

//判断session里面是不是存储到值，如果没有存储，让其跳转到登录界面
if(empty($_SESSION['uname']))
{
    header("location:login.html");
    exit;
}

$names = $_SESSION['uname'];
/**
*判断登录状态
*/
?>
