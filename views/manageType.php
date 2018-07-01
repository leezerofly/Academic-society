<?php
  // 引入顶部及导航栏
  require_once("top.php");

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
  <title>管理分类</title>

  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/paging.css">
  <link rel="stylesheet" href="/css/manage-article.css">
  
</head>
<body>
  <p class="lead text-center">
    <?php
      if (isset($_GET['delete_article_type_id'])) {
        $manageType->deleteArticleType($_GET['delete_article_type_id']);
      } else if (isset($_GET['article_type_id']) && isset($_GET['article_type_name'])) {
        $manageType->updateArticleType($_GET['article_type_id'], $_GET['article_type_name']);
      } else if (isset($_GET['create_article_type_name'])) {
        $manageType->createArticleType($_GET['create_article_type_name']);
      }
      // 输出错误及成功提示
      if ($manageType->errors) {
        foreach ($manageType->errors as $error) {
          echo $error;
        }
      }
      if ($manageType->messages) {
        foreach ($manageType->messages as $message) {
          echo $message;
        }
      }
    ?>
  </p>
  <div class="row list-group article-list">
    <?php
      $result = $manageType->selectArticleType();   

      while($row=$result->fetch_assoc()){
        echo "<div class=\"list-group-item col-md-10 font18 list-content list-lineheight\">".
                $row["type_name"].
              "</div>
              <a class=\"btn btn-default col-md-1 btn-article\" onclick=\"return updateArticleTypeName(".$row["type_id"].")\">编辑</a>
              <a href=\"/views/manageType.php?delete_article_type_id=".$row["type_id"]."\" 
                class=\"btn btn-default col-md-1 btn-article\" 
                onclick=\"return confirmDel()\">
                删除
              </a>
            ";
      }
      echo "<div class=\"btn btn-default list-group-item col-md-12 list-content list-lineheight font18\" onclick=\"return createArticleTypeName()\">新增分类</div>";
    ?>
  </div>

  <script>
    // 删除确认弹框
    function confirmDel() {  
      var msg = "确定删除吗？";  
      if (confirm(msg)==true){
        return true;
      }else{  
        return false;  
      }  
    } 
    //弹出修改分类输入框
    function createArticleTypeName() {
      var newTypeName = prompt("请输入新分类名", "");

      if (newTypeName) {
        window.location.href = "manageType.php?create_article_type_name=" + newTypeName;
      }
    }
    //弹出修改分类输入框
    function updateArticleTypeName(typeId) {
      var newTypeName = prompt("请输入新分类名", "");

      if (newTypeName) {
        window.location.href = "manageType.php?article_type_id=" + typeId + "&article_type_name=" + newTypeName;
      }
    }
  </script>
</body>
</html>