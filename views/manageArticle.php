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
  <link rel="stylesheet" href="/css/paging.css">
  <link rel="stylesheet" href="/css/manage-article.css">
  
</head>
<body>
  <div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">学会新闻</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">通知公告</a></li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">教学研究</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">学术研讨</a></li>
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
    </div>
  </div>

  <div class="box center-block" id="box"></div>
  <script src="/js/paging.js"></script>
  <script>
      var setTotalCount = 100;
      $('#box').paging({
          initPageNo: 1, // 初始页码
          totalPages: 20, //总页数
          totalCount: '合计' + setTotalCount + '条数据', // 条目总数
          slideSpeed: 600, // 缓动速度。单位毫秒
          jump: true, //是否支持跳转
          callback: function(page) { // 回调函数
              console.log(page);
          }
      })
  </script>

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