<?php
  include("top.php");

  // 引入AddArticle类
  require_once("../classes/SelectArticle.php");
  
  $selectArticle = new SelectArticle();

  $articleTypeId = isset($_GET['article_type_id'])? $_GET['article_type_id'] : 0; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文章详情</title>

  <link rel="stylesheet" href="/css/article-content.css">
  <link rel="stylesheet" href="/css/index.css">
</head>
<body>
  <div class="list-group article-list">
    <?php  
      // 根据typeid查询一类文章所有文章
      $selectArticle->selectArticleTitleType($articleTypeId);
    ?>
  </div>
</body>
</html>