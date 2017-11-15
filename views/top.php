<?php

$webroot = dirname(dirname(__FILE__));

// include the configs / constants for the database connection
require_once($webroot.'/config/db.php');

// load the login class
require_once($webroot.'/classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- 引入 Bootstrap -->
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="/framework/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="/framework/jQuery-3.2.1.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="/framework/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/top.css">
</head>
<body>
    <header>
        <div class="top">
            <div class="topContent">
                <div class="website-title">
                    <span class="font20">江西省</span><span class="font24 font-color-red">数学学会</span>
                    <p class="font-color-red">Jiangxi Mathematical Society</p>
                </div>
                <div class="user-info font16 font-color-red">
                    <?php                  
                        // 判断是否已登录:
                        if ($login->isUserLoggedIn() == true) {
                            // 若已登录
                            echo "<p class=\"\">
                                ".$_SESSION['user_name']."，您好！
                                <a href=\"/index.php?logout\" class=\"btn btn-xs btn-danger\">退出</a>
                            </p>
                            <div>
                                <a href=\"/views/articleInput.php\" class=\"btn btn-default btn-xs\">发表文章</a>";
                            
                            //判断是不是管理员
                            if($login->isAdmin() == true) {
                                echo "<a href=\"/views/manageArticle.php\" class=\"btn btn-default btn-xs pull-right\">管理文章</a>";
                            }
                            echo "</div>";
                        } else {
                            echo "<a href=\"/views/login.php\" class=\"btn btn-default btn-sm\">注册与登录</a>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse font20" role="navigation">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="/index.php">网站首页</a></li>                            
                    <li><a href="/views/articleFromType.php?article_type_id=5">学会简介</a></li>
                    <li><a href="/views/articleFromType.php?article_type_id=6">学会章程</a></li>
                    <li><a href="/views/articleFromType.php?article_type_id=7">组织架构</a></li>                    
                    <li><a href="/views/articleFromType.php?article_type_id=8">新闻资讯</a></li>                    
                    <li><a href="/views/articleFromType.php?article_type_id=9">下载专区</a></li>                      
                </ul>
            </div>
        </nav>
    </header>
  </body>
</html>