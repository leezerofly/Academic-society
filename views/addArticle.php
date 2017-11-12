<?php
  // 引入顶部及导航栏
  // 内含bootstrap和jQuery
  include("top.php");

  // 引入AddArticle类
  require_once("../classes/AddArticle.php");

  $addArticle = new AddArticle();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>添加文章</title>

  <link rel="stylesheet" href="/css/article-content.css">
</head>
<body>
    <div class="mainpart">
        <?php
            echo $_SESSION['user_name']."<br/>";
            print_r($_POST["articleTitle"]."<br/>");
            //输出错误及提示信息
            if (isset($addArticle)) {
                if ($addArticle->errors) {
                    foreach ($addArticle->errors as $error) {
                        echo $error;
                    }
                }
                if ($addArticle->messages) {
                    foreach ($addArticle->messages as $message) {
                        echo $message;
                    }
                }
            }
        ?>
    </div>
</body>
</html>