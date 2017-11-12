<?php
  // 引入顶部及导航栏
  require_once("top.php");

  // 引入SelectArticle类
  require_once("../classes/SelectArticle.php");
  $selectArticle = new SelectArticle();
  
  //输出查询文章时错误及提示信息
  if (isset($selectArticle)) {
    if ($selectArticle->errors) {
      foreach ($selectArticle->errors as $error) {
          echo $error;
      }
    }
    if ($selectArticle->messages) {
      foreach ($selectArticle->messages as $message) {
          echo $message;
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>管理文章</title>

  <link rel="stylesheet" href="/css/index.css">
  
</head>
<body>
  <div class="list-group article-list">
    <?php  
      $selectArticle->selectAllTitle();
    ?>
  </div>

  <script>
    // 确认弹框
    function confirmDel() {  
      var msg = "确定删除该条数据？";  
      if (confirm(msg)==true){  
          return true;  
      }else{  
          return false;  
      }  
    }   
  </script>
</body>
</html>