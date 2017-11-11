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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <h1 class="fontColor1">Academic</h1>
                <h1>society</h1>
                <div class="signIn font2 fontColor1">
                    <?php                  
                        // 判断是否已登录:
                        if ($login->isUserLoggedIn() == true) {
                            include($webroot.'/views/logged_in.php');

                            echo "<br/>";

                            //若已登录，判断是不是管理员
                            if($login->isAdmin() == true) {
                                echo "<a href=\"/views/adminArticle.php\" class=\"btn btn-default btn-xs\">管理文章</a>";
                            }

                            echo "<a href=\"/views/addArticle.php\" class=\"btn btn-default btn-xs\">发表文章</a>";
                        } else {
                            echo "<a href=\"/views/not_logged_in.php\" class=\"btn btn-default btn-sm\">注册与登录</a>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div>
                    <ul class="nav navbar-nav font3">
                        <li><a href="/index.php">网站首页</a></li>                            
                        <li><a href="/views/articleFromType.php?article_type_id=5">组织机构</a></li>
                        <li><a href="/views/articleFromType.php?article_type_id=6">理事名单</a></li>
                        <li><a href="/views/articleFromType.php?article_type_id=7">学会章程</a></li>                    
                        <li><a href="/views/articleFromType.php?article_type_id=8">政策文件</a></li>                    
                        <li><a href="/views/articleFromType.php?article_type_id=9">学会名人</a></li>                    
                        <li><a href="/views/articleFromType.php?article_type_id=10">培训信息</a></li> 
                        <li class="dropdown">
                            <a href="/views/notification.php" class="dropdown-toggle" data-toggle="dropdown">
                                信息通知
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/views/regulation.php">学会新闻</a></li>
                                <li><a href="/views/regulation.php">通知公告</a></li>
                                <li><a href="/views/regulation.php">教学研究</a></li>
                                <li><a href="/views/regulation.php">学术研讨</a></li>
                            </ul>
                        </li>                      
                    </ul>
                </div>
            </div>
        </nav>
    </header>
  </body>
</html>