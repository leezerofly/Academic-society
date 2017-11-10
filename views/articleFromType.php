<?php
  include("top.php");

  // 引入AddArticle类
  require_once("../classes/SelectArticle.php");
  
  $selectArticle = new SelectArticle();

  // 根据type id查询文章内容
  $selectArticle->selectArticleFromType();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文章详情</title>

  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/article-content.css">
</head>
<body>
  
</body>
</html>