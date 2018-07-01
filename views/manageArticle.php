<?php
  // 引入顶部及导航栏
  require_once("top.php");

  // 引入SelectArticle类
  require_once("../classes/SelectArticle.php");
  $selectArticle = new SelectArticle();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>管理文章</title>

  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/paging.css">
  <link rel="stylesheet" href="/css/manage-article.css">
  
</head>
<body>
  <div>
    <p class="lead text-center">
      <?php
        $articleId = isset($_GET['delete_article_id']) ? $_GET['delete_article_id'] : 0;
    
        if($articleId > 0) {   
          $selectArticle->deleteArticle($articleId);
        }  
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
    </p>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs tab-list" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">学会新闻</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">通知公告</a></li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">教学研究</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">学术研讨</a></li>
      <li role="presentation"><a href="#intro" aria-controls="intro" role="tab" data-toggle="tab">学会简介</a></li>
      <li role="presentation"><a href="#regulations" aria-controls="regulations" role="tab" data-toggle="tab">学会章程</a></li>
      <li role="presentation"><a href="#organization" aria-controls="organization" role="tab" data-toggle="tab">组织架构</a></li>
      <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">新闻资讯</a></li>
      <li role="presentation"><a href="#download" aria-controls="download" role="tab" data-toggle="tab">下载专区</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

      <div role="tabpanel" class="tab-pane active" id="home">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(1);
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(2);
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(3);
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(4);
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="intro">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(5);
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="regulations">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(6);
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="organization">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(7);
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="news">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(8);
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="download">
        <div class="row list-group article-list">
          <?php  
            $selectArticle->manageSelectArticleTitleType(9);
          ?>
        </div>
      </div>

    </div>
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