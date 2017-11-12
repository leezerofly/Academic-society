<?php
  // 引入顶部及导航栏
  // 内含bootstrap和jQuery
  include("top.php");

  // 引入AddArticle类
  require_once("../classes/AddArticle.php");

  $addArticle = new AddArticle();

  //输出错误及提示信息
  if (isset($addArticle)) {
    if ($addArticle->errors) {
        foreach ($addArticle->errors as $error) {
            echo $error;
        }
    }
    if ($addArticle->messages) {
        foreach ($addArticle->messages as $message) {
            echo $message;
        }
    }
  }