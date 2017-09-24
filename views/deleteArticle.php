<?php
    include("top.php");

    // 引入DeleteArticle类
    require_once("../classes/DeleteArticle.php");
    $deleteArticle = new DeleteArticle();
     
    $articleId = isset($_GET['article_id']) ? $_GET['article_id'] : 0;
  
    if($articleId > 0) {   
      $deleteArticle->deleteArticle($articleId);
    } else {
      echo "none";
    }

    // $deleteArticle->deleteArticle($articleId);

      //输出错误及提示信息
    if (isset($deleteArticle)) {
      if ($deleteArticle->errors) {
          foreach ($deleteArticle->errors as $error) {
              echo $error;
          }
      }
      if ($deleteArticle->messages) {
          foreach ($deleteArticle->messages as $message) {
              echo $message;
          }
      }
    }
