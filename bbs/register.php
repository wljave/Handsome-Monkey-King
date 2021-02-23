<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/container.js"></script>
    <script type="text/javascript" src="js/footer.js"></script>
    <script>
    //检查是否都符合 注册 要求
    function check_reg()
    {
    if(check_password() && check_repassword() && check_email())
    {
        return true;
    }else{
        return false;
        }
    }

    //检查密码长度不能少于6
    function check_password(thisObj){
        if(thisObj.value.length==0)
        {
            document.getElementById('show_password').innerHTML="密码不能为空";
            return false;
        }else{
        if (thisObj.value.length<6)
        {
            document.getElementById('show_password').innerHTML="密码长度不少于6";
            return false;
        }
            document.getElementById('show_password').innerHTML="";
            return true;
          }
    }

    //检查俩次密码输入是否一致
    function check_repasswordpass(thisObj){
        var psw=document.getElementById('password');
        if(psw.value.length==0)
        {
            document.getElementById('show_password').innerHTML="密码不能为空";
            return false;
        }else{
            document.getElementById('show_password').innerHTML="";

        if (thisObj.value!=psw.value)
        {
            document.getElementById('show_repassword').innerHTML="两次密码输入不正确";
            return false;
        }
            document.getElementById('show_repassword').innerHTML="";
            return true;
        }
    }

    //检查email是否正确
    function check_email(thisObj){
        var reg=/^([a-zA-Z\d][a-zA-Z0-9_]+@[a-zA-Z\d]+(\.[a-zA-Z\d]+)+)$/gi;
        var rzt=thisObj.value.match(reg);
        if(thisObj.value.length==0){
            document.getElementById('show_email').innerHTML="Email不能为空";
            return false;
            }else{
        if (rzt==null)
        {
            document.getElementById('show_email').innerHTML="Email地址不正确";
            return false;
        }
            document.getElementById('show_email').innerHTML="";
            return true;
      }
    }
    </script>
    <!-- <script>
      function compare(){
        var a=document.getElementById('Password').value;
        var b=document.getElementById('RePassword').value;
        if(a==b){
        document.getElementById('ts').innerHTML="密码一致!";
      }else{
        document.getElementById('ts').innerHTML="两次密码不一致!";
        }
      }
    </script> -->
    <title>注册页面</title>
  </head>
<body>
  <!-- 注册类 -->
  <div class="register">
    <!-- 默认格栅的一半宽度并水平居中 -->
    <div class="col-md-6 col-center-block">
      <!-- 注册面板 -->
      <div class="panel panel-default">
        <div class="page-header">
          <h1><small>用户注册</small></h1>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" action="RegisterSuccessful.php" method="post" onsubmit="return check_reg()">
            <div class="form-group">
              <label for="input" class="col-sm-2 control-label">用户名</label>
              <div class="col-sm-10">
                <input class="form-control" name="user" placeholder="请输入可用的用户名 如：张三">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail3" onblur="check_email(this)" placeholder="必须输入正确的邮箱 如：jave@163.com">
                <span id="show_email" style="color:red;"></span>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" onkeyup="compare();" onblur="check_password(this)" id="Password" placeholder="密码必须是6-16位的字母、数字或者符号，不能为纯数字">
                <span id="show_password" style="color:red;"></span>
              </div>
            </div>
            <div id="ts"></div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
              <div class="col-sm-10">
                <input type="password" name="repassword" class="form-control" onkeyup="compare();" onblur="check_repassword(this)" id="RePassword" placeholder="请再次输入您的密码">
                <span id="show_repassword" style="color:red;"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-danger">提交</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
