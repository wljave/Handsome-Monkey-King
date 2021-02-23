<?php
/**
 * 上传类文件
 */
class Upload
{

  function __construct()
  {
    // code...
  }
  function up($formName)
  {
    if(isset($_FILES[$formName]) && $_FILES[$formName]['error'] != 4){
      $file = ($_FILES[$formName]);
      //判断上传是否成功
      if($file['error'] > 0){
        die('文件上传失败！');
      }
      //判断文件后缀
      $ext = pathinfo($file['name'],PATHINFO_EXTENSION);
      //var_dump($ext);
      if($ext != 'jpg'){
        die('上传文件格式不正确！');
      }
      if ($file['size'] > 2048*1024) {
        die('只能上传2M及以下文件！');
      }
      //保存临时文件到指定目录，并且随机生成文件名
      $uploads_dir = './uploads';
      $filename = uniqid() . '.jpg';
      move_uploaded_file($file['tmp_name'], "$uploads_dir/{$filename}");

      return $filename;
    }else {
      return '';
    }
  }
}

?>
