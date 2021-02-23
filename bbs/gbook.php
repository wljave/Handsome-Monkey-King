<?php
//数据库查询语句文件
include_once('orderby.php');
//分页文件
include_once('page.php');
//判断登录状态文件，如果没有值则跳转到登录页面
include_once('loginStatus.php');
/**
*留言板首页
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
    <title>留言板</title>
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
        <!-- 发表留言区 -->
        <div class="col-md-12">
          <form class="form-horizontal" action="save.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="col-sm-12">
                <textarea class="form-control" name="content" placeholder="请输入留言内容" rows="8"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-4">
                <input class="form-control" name="name" placeholder="请输入留言人">
              </div>
              <div class="col-sm-4">
                <input type="file" name="file1" id="exampleInputFile">
              </div>
              <div class="col-sm-4">
                <button type="submit" class=" pull-right btn btn-primary">发表留言</button>
              </div>
            </div>
          </form>
        </div>
        <?php
        foreach($res as $row){
        ?>
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
        <?php
          }
        ?>
      </div>
      <!-- 分页区 -->
      <div class="pagel">
        <div class="col-md-12">
          <nav aria-label="Page navigation">
              <ul class="pagination">
                  <!-- 首页 -->
                  <li><?php $p->home_page();?></li>
                  <!-- 上一页 -->
                  <li><?php $p->Previous();?></li>
                  <!-- 页码 -->
                  <li><?php $p->show();?></li>
                  <!-- 下一页 -->
                  <li><?php $p->Next();?></li>
                  <!-- 尾页 -->
                  <li><?php $p->trailer_page();?></li>
              </ul>
          </nav>
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
