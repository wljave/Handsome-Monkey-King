<?php
session_start();
header("Cache-control: private");

$username = isset($_POST['Username']) ? $_POST['Username'] : '';
$password = isset($_POST['Password']) ? $_POST['Password'] : '';
$hash_password = password_hash($password, PASSWORD_BCRYPT);
var_dump($username,$password,$hash_password);
?>


<?php
// 验证密码是否和指定的哈希值匹配
$hash = '$2y$10$PbDtwpiVRESLkCuSYzaFz..z333.Ziz9yPmoOdt1AnX87nckVY5eu';

if (password_verify('rasmuslerdorf', $hash)) {
    echo '密码是有效的!';
} else {
    echo '无效的密码.';
}
?>

<?php 
if (condition) {
  if (condition) {
    if (condition) {
    } else {
      // code...
    }

  } else {
    // code...
  }
} else {
  // code...
}

 ?>

<?php
// session_start();
// include_once('orderby.php');
// include_once('page.php');
// //判断session里面是不是存储到值，如果没有存储，让其跳转到登录界面
// if(empty($_SESSION['name']))
// {
//     header("location:");
//     exit;
// }
//  $names = $_SESSION['name'];
// var_dump($names);
/**
*判断登录状态
*/
?>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
    <title>留言板</title>
  </head>
  <body>
    <div class="container"> -->
      <!-- 导航条 -->
      <!-- <div class="col-md-12">
        <div class="navigation">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid"> -->
              <!-- Brand and toggle get grouped for better mobile display -->
              <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="gbook.php">
                    <img alt="Jave" src="img/brand1.ico">
                    <span>Jave</span>
                  </a>
              </div> -->
              <!-- Collect the nav links, forms, and other content for toggling -->
              <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="gbook.php">首页 <span class="sr-only">(current)</span></a></li>
                  <li><a href="gbook.php">个人展示</a></li>
                </ul>
                <form class="navbar-form navbar-left form-group-sm">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="使用用户名进行查询">
                  </div>
                  <button type="submit" class="btn btn-default btn-sm">搜索</button>
                </form>
                <ul class="nav navbar-nav navbar-right"> -->
                  <?php
                  // if($names==$_SESSION['name']){
                  ?>
                  <!-- <li class="dropdown">
                    <a style="color:#32CD32" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php //echo $names;?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="logout.php">退出</a></li>
                    </ul>
                  </li> -->
                    <!-- <li><a style="color:#00EE00"><?php //echo $names;?></a></li> -->
                  <?php
                  // }else{
                  ?>
                    <!-- <li><a href="login.html">登录</a></li>
                    <li class="dropdown">
                      <li><a href="register.php">注册</a></li>
                    </li> -->
                    <?php
                    // }
                    ?>
                <!-- </ul>
              </div>
            </div>
          </nav>
          </div>
      </div>
    </div> -->

    <!-- 脚注 -->

  <!-- </body>
</html> -->
