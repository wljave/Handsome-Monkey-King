<?php
//数据库查询语句文件
include_once('orderby.php');
/**
*留言板前台首页入口
*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
    <title>前台首页</title>
  </head>
  <body>
    <div class="wpcontent">
      <div class="container">
        <!-- 导航条 -->
        <div class="col-md-12">
          <div class="navigation">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
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
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
                  <ul class="nav navbar-nav navbar-right">
                    <?php
              				if($names==$_SESSION['uname']){
              			  ?>
              			  <li class="dropdown">
              				<a style="color:#32CD32" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $names;?> <span class="caret"></span></a>
              				<ul class="dropdown-menu">
              				  <li><a href="logout.php">退出</a></li>
              				</ul>
              			  </li>
              				<!-- <li><a style="color:#00EE00"><?php //echo $names;?></a></li> -->
              			  <?php
              			  }else{
              			 ?>
                      <li><a href="login.html">登录</a></li>
                      <li class="dropdown">
                        <li><a href="register.php">注册</a></li>
                      </li>
                      <?php
                      }
                      ?>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            </div>
        </div>
        <!-- 巨幕区 -->
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>留言板</h1>
            <p>Jave学习独立开发</p>
            <p><a class="btn btn-primary btn-lg" href="gbook.php" role="button">了解更多</a></p>
          </div>
        </div>

<div class="show">
  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
</div>

      <!-- 留言回复区 -->
      <div class="emssg">
        <div class="col-md-12">
              <!-- 查看留言 -->
          <div class="panel panel-default ">
            <div class="panel-heading clearfix">
                <div class="name">
                  <span class="user alert-info"><?php echo $row['name'];?></span>
                  <?php
                  if($row['name']==$names){
                  ?>
                      <span class="delete pull-right"><a class="btn btn-danger btn-xs" onclick="return confirm('您确定要删除吗？')" href='delete.php?id=<?php echo $row['id'];?>'>删除</a></span>
                    <?php
                    }else{
                    ?>
                      <span class="delete pull-right"><a class="btn btn-danger btn-xs" disabled="disabled">删除</a></span>
                    <?php
                    }
                    ?>
                  <span class="time pull-right"><?php echo $row['time'];?></span>
              </div>
            </div>
            <div class="panel-body">
              <?php echo $row['content'];?>
                <span class="piic">
                <?php
                if($row['pic'] != ''){
                  echo "<a href='./uploads/{$row['pic']}'><img class='img-thumbnail' src='./uploads/{$row['pic']}'  /></a>";
                ?>
                </span>
                <?php
                }
                ?>
            </div>
          </div>
        </div>
      </div>

        <!-- 脚注版权信息 -->
        <div class="noneblock">
          <script type="text/javascript" src="js/footer.js"></script>
        </div>
        <!-- <div class="noneblock" onMouseOver="this.style.display='none';" onMouseOut="this.style.display='block';"> -->
        <!-- </div> -->
      </div>
    </div>
  </body>
</html>
