<?php
session_start();
include_once('conn.php');
/**
*管理员登录确认页面
*/

$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$adminpwd = isset($_POST['adminpwd']) ? $_POST['adminpwd'] : '';

//$hash_admin_password = "SELECT pwd FROM jave_admin WHERE name = '{$uname}'";

//如果账号或密码为空，则重新输入
if (empty($uname) || empty($adminpwd)) {
  echo "账号或密码不能为空，请重新输入！";
  header("Location: login.html");
  exit;
}

//如果账号和密码都并不为空才进行密码有效性检查
if(!empty($uname) && !empty($adminpwd)){
  $sql = "SELECT pwd FROM jave_admin WHERE name = '{$uname}' ";
  /*var_dump($sql);
  exit;*/
  $mysqli_result = $db->query($sql);
  /*var_dump($mysqli_result);
  exit;*/
  $row = $mysqli_result->fetch_array(MYSQLI_ASSOC);
  /*var_dump($row);
  exit;*/
  //获取数组中的加密密码
  $hash_admin_password = $row['pwd'];
  /*var_dump($hash_admin_password);
  exit;*/
//如果$row是数组且有数据，说明数据匹配是有效账号
  if(is_array($row)){
    $_SESSION['login'] = 1;
    $_SESSION['uname'] = $uname;
	/*var_dump($_SESSION['uname']);
	exit;*/
    // 验证密码是否和指定的哈希值匹配
    if (password_verify($adminpwd,$hash_admin_password)){
        echo "<script type='text/javascript'>alert('登录成功，确认跳转！');location.href='gbook.php';</script>";
        exit;
    }else{
      echo "<script type='text/javascript'>alert('无效的密码，请重新输入！');location.href='AdminLogin.html';</script>";
      exit;
    }
  }else{
    $login = 0;
    echo "<script type='text/javascript'>alert('账户不存在，请联系管理员！');location.href='AdminLogin.html';</script>";
    exit;
    }
}
$db->close();
?>