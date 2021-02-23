<?php
/**
 * 用input类进行封装post()函数
 */
class input
{
  /**使用函数对数据进行封装
  *定义函数，对数据进行检查
  */
  function post($content){
    if($content == ''){
      return false;
    }
    return true;
  }
}
?>
