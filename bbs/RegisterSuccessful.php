<?php
session_start();
header("Cache-control: private");
include_once('conn.php');

/**
*注册确认页面
*/

$user = isset($_POST['user']) ? $_POST['user'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : '';

//点击提交按钮开始判断用户名是否重复
if(isset($_POST['submit']))
{   //判断注册的用户名是否存在
    $sqll="select * from jave_admin,jave_users where name='{$user}' or uname='{$user}'";
    $mysqli_result = $db->query($sqll);
    $rows = $mysqli_result->fetch_array(MYSQLI_ASSOC);
    if(is_array($rows) > 0){
         echo "<script type='text/javascript'>alert('用户名已存在，请重新输入！');location='javascript:history.back()';</script>";
    }else {

    //如果密码和确认密码一致则对密码进行加密，否则重新输入
    if(trim($password)==trim($repassword)){
    $hash_password = password_hash($repassword, PASSWORD_BCRYPT);
    }else{
      echo "<script type='text/javascript'>alert('两次输入的密码不一致，请重新输入！');location.href='register.php';</script>";
      exit;
    }
      //将注册信息写入数据库的SQL语句
      /**
      *中国时区设置方式
      *'PRC'为“中华人民共和国”时间
      */
      //date_default_timezone_set('Asia/Shanghai');
      date_default_timezone_set('PRC');
      $created_tm = date('Y-m-d H:i:s', time());
      $sql = "insert into jave_users (uname,password,email,created_time) values ('{$user}','{$hash_password}','{$email}','{$created_tm}')";
      //执行SQL语句
      $is = $db->query($sql);
      // var_dump($is);
      //判断SQL执行插入语句是否成功
      if($is == true){
        echo "<script type='text/javascript'>alert('恭喜^_^注册成功！');location.href='login.html';</script>";
      }else{
        echo "<script type='text/javascript'>alert('注册失败-_-');location.href='register.php';</script>";
      }
    }
}

//mysql_close($db);
$db->close();
?>
