<?php
include_once('conn.php');
/**
*这是分页文件
*/
class Page{
    public $maxPage;
    public $page;
    public $offset;
    function __construct($dataTotal,$pageNum){
      //获取当前页码，如果页码不存在，则默认等于1
      if(isset($_GET['page'])){
        $this->page = $_GET['page'];
      }else {
        $this->page = 1;
      }
    //计算最大页数
    $this->maxPage = ceil($dataTotal/$pageNum);
    //计算数据偏移量,跳过前面页码的数据俩，数据随页面变化而变化
    $this->offset = ($this->page-1) * $pageNum;
    }
    //页码
    function show(){
      for ($i=1; $i <= $this->maxPage; $i++) {
        if($i == $this->page){
          echo "<li class='active'><a href='gbook.php?page={$i}'>{$i}<span class='sr-only'>(current)</span></a></li>";
        }else{
          echo "<li><a href='gbook.php?page={$i}'>{$i}</a></li>";
        }
      }
    }
    //首页
    function home_page(){
      //第一页的时候没有上一页
      echo '<a href="gbook.php">首页</a>';
    }
    //上一页
    function Previous(){
      if(($this->page) > 1){
      echo '<a aria-label="Previous" href="gbook.php?page='.($this->page-1).'"><span aria-hidden="true">&laquo;</span></a>';
      }
    }
    //下一页
    function Next(){
      if(($this->page) < ($this->maxPage)){
      echo '<a href="gbook.php?page='.($this->page+1).'"><span aria-hidden="true">&raquo;</span></a>';
      }
    }
    //尾页
    function trailer_page(){
      //尾页的时候不显示下一页
      echo '<a href="gbook.php?page='.($this->maxPage).'">尾页</a>';
    }

}

$sql = "SELECT count(*) as t FROM jave_msg";
$mysqli_result = $db->query($sql);
$row = $mysqli_result->fetch_array(MYSQLI_ASSOC);

//总数据条数
$dataTotal = $row['t'];
//每页显示的条数
$pageNum = 5;
//实例化Page()函数
$p = new Page($dataTotal,$pageNum);
//var_dump($p);
?>
