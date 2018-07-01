<?php
  // 引入顶部及导航栏
  require_once("top.php");

  // 引入SelectArticle类
  require_once("../classes/SelectArticle.php");
  $selectArticle = new SelectArticle();
  
  // 引入ManageType类
  require_once("../classes/ManageType.php");
  $manageType = new ManageType();
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
      <?php
        $result = $manageType->selectArticleType();
        while($row=$result->fetch_assoc()){
          echo "<li role=\"presentation\"".($row["type_id"] == 1 ? "class=\"active\"" : "").">
            <a href=\"#".$row["type_id"]."\" aria-controls=\"".$row["type_id"]."\" role=\"tab\" data-toggle=\"tab\">".$row["type_name"]."</a>
          </li>";
        }
      ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <?php
        $result = $manageType->selectArticleType();
        while($row=$result->fetch_assoc()){
          echo "<div role=\"tabpanel\" class=\"tab-pane ".($row["type_id"] == 1 ? "active" : "")."\" id=\"".$row["type_id"]."\">
                  <div class=\"row list-group article-list\">";
          $selectArticle->manageSelectArticleTitleType($row["type_id"]);
          echo "  </div>
                </div>
          ";
        }
      ?>
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