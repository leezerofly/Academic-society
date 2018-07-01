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

  <script src="../js/jqpaginator.min.js"></script>

  <link rel="stylesheet" href="/css/article-content.css">
  <link rel="stylesheet" href="/css/index.css">
</head>
<body>
  <div class="list-group article-list">
    <div id="text"></div>
    <?php  
      // 根据typeid查询一类文章所有文章
      $selectArticle->selectArticleTitleType($articleTypeId, 1);
    ?>
  </div>
  <ul id="jqPaginator" class="pagination">
  </ul>
  <!-- <div id="jqPaginator"></div> -->
  <script>
    // $('#jqPaginator').jqPaginator({
    //   totalCounts: 1000,
    //   pageSize: 10,
    //   visiblePages: 10,
    //   currentPage: 1,
    //   first: '<li class="first"><a href="javascript:void(0);">首页</a></li>',
    //   prev: '<li class="prev"><a href="javascript:void(0);">上一页</a></li>',
    //   next: '<li class="next"><a href="javascript:void(0);">下一页</a></li>',
    //   last: '<li class="last"><a href="javascript:void(0);">尾页</a></li>',
    //   page: '<li class="page"><a href="javascript:void(0);">{{page}}</a></li>',
    //   onPageChange: function (num) {
    //       $('#text').html('');
    //   }
    // });
  </script>
</body>
</html>