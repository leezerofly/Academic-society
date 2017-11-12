<?php
    include("top.php");

    // 引入DeleteArticle类
    require_once("../classes/DeleteArticle.php");
    $deleteArticle = new DeleteArticle();
     
    $articleId = isset($_GET['article_id']) ? $_GET['article_id'] : 0;
  
    if($articleId > 0) {   
      $deleteArticle->deleteArticle($articleId);
    } else {
      echo "未传入要删除的文章id";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>删除文章</title>

    <link rel="stylesheet" href="/css/article-content.css">
</head>
<body>
    <div class="mainpart">
        <?php
            echo "<p class=\"lead text-center\">"
        ?>
        <?php  
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
        ?>
        <?php
            echo "</p>
            <div class=\"text-center\">
                <a href=\"manageArticle.php\" class=\"btn btn-default btn-lg\">继续管理</a>
                <a href=\"/index.php\" class=\"btn btn-default btn-lg\">返回首页</a>
            </div>"
        ?>
    </div>
</body>
</html>
