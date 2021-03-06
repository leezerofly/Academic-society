<?php
    $webroot = dirname(dirname(__FILE__));

    require_once($webroot.'/config/db.php');

    require_once($webroot.'/classes/Login.php');
    $login = new Login();
    
    // 引入ManageType类
    require_once($webroot."/classes/ManageType.php");
    $manageType = new ManageType();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- 引入 Bootstrap -->
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="../js/jQuery-3.2.1.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/top.css">
</head>
<body>
    <header>
        <div class="top">
            <div class="topContent">
                <div class="website-title">
                    <span class="font28">江西省数学会</span>
                    <p>Jiangxi Mathematical Society</p>
                </div>
                <div class="user-info font18 font-color-red">
                    <?php                  
                        // 判断是否已登录:
                        if ($login->isUserLoggedIn() == true) {
                            // 若已登录
                            echo "<p>
                                <span class=\"user-name\">".$_SESSION['user_name']."，您好！</span>
                                <a href=\"/index.php?logout\" class=\"btn btn-sm btn-danger\">退出</a>
                            </p>
                            <div>
                                <a href=\"/views/articleInput.php\" class=\"btn btn-default btn-sm\">发表文章</a>";
                            
                            //判断是不是管理员
                            if($login->isAdmin() == true) {
                                echo "
                                <a href=\"/views/manageType.php\" class=\"btn btn-default btn-sm pull-right\">管理分类</a>
                                <a href=\"/views/manageArticle.php\" class=\"btn btn-default btn-sm pull-right\">管理文章</a>
                                ";
                            }
                            echo "</div>";
                        } else {
                            echo "<a href=\"/views/login.php\" class=\"btn btn-default btn-sm\">注册与登录</a>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <nav class="navbar-inverse font20" role="navigation">
            <div class="navbar-self">
                <ul class="nav navbar-nav row text-center">
                    <li class="col-md-2"><a href="/index.php">学会首页</a></li>
                    <?php
                        $result = $manageType->selectArticleTypeLimit5();
                        while($row=$result->fetch_assoc()){
                          echo "<li class=\"col-md-2\">
                                  <a href=\"/views/articleFromType.php?article_type_id=".$row["type_id"]."\">".$row["type_name"]."</a>
                              </li>";
                        }
                    ?>
                    <!-- <li class="col-md-2"><a href="/views/articleFromType.php?article_type_id=5">学会简介</a></li>
                    <li class="col-md-2"><a href="/views/articleFromType.php?article_type_id=6">学会章程</a></li>
                    <li class="col-md-2"><a href="/views/articleFromType.php?article_type_id=7">组织架构</a></li>                    
                    <li class="col-md-2"><a href="/views/articleFromType.php?article_type_id=8">新闻资讯</a></li>                    
                    <li class="col-md-2"><a href="/views/articleFromTypeAll.php?article_type_id=9">下载专区</a></li>                       -->
                </ul>
            </div>
        </nav>
    </header>
  </body>
</html>