<?php
include_once('conn.php');
include_once('page.php');
/**这是查询语句文件
*sql查询数据库的信息
*/
//编写查询的SQL语句
$sql = "SELECT * FROM jave_msg ORDER BY id DESC LIMIT {$p->offset},{$pageNum}";
//执行SQL查询语句
$mysqli_result = $db->query($sql);
//判断SQL是否有错误
if($mysqli_result === false){
  echo "SQL语句错误！";
  exit;
}
//显示查询信息
$res = [];
while ($row= $mysqli_result->fetch_array(MYSQLI_ASSOC)) {
  $res[$row['id']] = $row;
}
//var_dump($res);
$db->close();
?>
