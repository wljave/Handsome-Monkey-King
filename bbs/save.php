<?php
include_once('input.php');
include_once('conn.php');
include_once('upload.php');

/**
*插入数据文件
**/

//接收test.html页面传递的数据
$content = $_POST['content'];
$user= $_POST['name'];
//var_dump($_FILES['file1']);

//实例化上传类
$upload = new upload();
//调用上传类up()方法
$filename = $upload->up('file1');


$input = new input();

$is = $input->post($content);
if ($is == false) {
  die("留言内容不能为空！");
}
$is = $input->post($user);
if ($is == false) {
  die("留言人不能为空！");
}
//var_dump($content,$name);


//编写插入SQL语句

/**
*中国时区设置方式
*'PRC'为“中华人民共和国”时间
*/

//date_default_timezone_set('Asia/Shanghai');
date_default_timezone_set('PRC');
$tm = date('Y-m-d H:i:s', time());
$sql = "insert into jave_msg (content,name,pic,time) values ('{$content}','{$user}','{$filename}','{$tm}')";
//执行SQL语句
$is = $db->query($sql);
var_dump($is);
//判断SQL执行插入语句是否成功
if($is == true){
  echo "插入成功！";
}else{
  die('插入失败！');
}
header("Location: gbook.php");
//mysql_close($db);
$db->close();
?>
