<?php
session_start();
include_once('conn.php');
/**
*登录确认页面
*/

$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$upwd = isset($_POST['upwd']) ? $_POST['upwd'] : '';

//$hash_user_pwd = "SELECT password FROM jave_users WHERE uname = '{$uname}'";

//如果账号或密码为空，则重新输入
if (empty($uname) || empty($upwd)) {
  echo "账号或密码不能为空，请重新输入！";
  header("Location: login.html");
  exit;
}

//如果账号和密码都并不为空才进行密码有效性检查
if(!empty($uname) && !empty($upwd)){
  $sql = "SELECT password FROM jave_users WHERE uname = '{$uname}'";
  $mysqli_result = $db->query($sql);
  $row = $mysqli_result->fetch_array(MYSQLI_ASSOC);
  //获取数组中的加密密码
  $hash_user_password = $row['password'];
//如果$row是数组且有数据，说明数据匹配是有效账号
  if(is_array($row)){
    $_SESSION['login'] = 1;
    $_SESSION['uname'] = $uname;
	/*var_dump($_SESSION['uname']);
	exit;*/
    // 验证密码是否和指定的哈希值匹配
    if (password_verify($upwd,$hash_user_password)){
        echo "<script type='text/javascript'>alert('登录成功，确认跳转！');location.href='gbook.php';</script>";
        exit;
    }else{
      echo "<script type='text/javascript'>alert('无效的密码，请重新输入！');location.href='login.html';</script>";
      exit;
    }
  }else{
    $login = 0;
    echo "<script type='text/javascript'>alert('账户不存在，请重新登录！');location.href='login.html';</script>";
    exit;
    }
}
$db->close();
?>