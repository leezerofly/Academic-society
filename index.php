<?php

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
    if ($login->isUserLoggedIn() == true) {
        // the user is logged in. you can do whatever you want here.
        // for demonstration purposes, we simply show the "you are logged in" view.
        include("views/logged_in.php");

    } else {
        // the user is not logged in. you can do whatever you want here.
        // for demonstration purposes, we simply show the "you are not logged in" view.
        include("views/not_logged_in.php");
    }
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
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Document</title>
</head>
<body>
    <header>
        <div class="top">
            <div class="topContent">
                <h1 class="fontColor1">Academic</h1>
                <h1>society</h1>
                <div class="signIn font2 fontColor1"><a href="php/login.php">
                    <?php                  
                    // ... ask if we are logged in here:
                    if ($login->isUserLoggedIn() == true) {
                        // the user is logged in. you can do whatever you want here.
                        // for demonstration purposes, we simply show the "you are logged in" view.
                        include("views/logged_in.php");

                    } else {
                        echo "<a href='views/login.php'>登录</a>";
                        // the user is not logged in. you can do whatever you want here.
                        // for demonstration purposes, we simply show the "you are not logged in" view.
                        // include("views/login.php");
                    }?>
                </a></div>
            </div>
        </div>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- <div class="navbar-header">
                    <a class="navbar-brand" href="#">网站首页</a>
                </div> -->
                <div>
                    <ul class="nav navbar-nav font3">
                        <li><a href="index.php">网站首页</a></li>                            
                        <li><a href="#">组织机构</a></li>
                        <li><a href="#">理事名单</a></li>
                        <li><a href="#">学会章程</a></li>                    
                        <li><a href="#">政策文件</a></li>                    
                        <li><a href="#">学会名人</a></li>                    
                        <li><a href="#">培训信息</a></li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                信息通知
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">学会新闻</a></li>
                                <li><a href="#">通知公告</a></li>
                                <li><a href="#">教学研究</a></li>
                                <li><a href="#">学术研讨</a></li>
                            </ul>
                        </li>                      
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-generic" data-slide-to="1"></li>
            <li data-target="#carousel-generic" data-slide-to="2"></li>
        </ol>
        
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/2016013008584330.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="img/2016013008584330.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="img/2016013008584330.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
        </div>
        
        <!-- 轮播（Carousel）导航 -->
        <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="mainpart">
        <div class="tableArea">         
            <div class="tableTitle">
                <span class="titleLeft"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">学会新闻</span>
                <a href="" class="more">更多</a>
            </div>
            <table class="table">
                <tbody>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                </tbody>
            </table>
        </div>

        <div class="tableArea">         
            <div class="tableTitle">
                <span class="titleLeft"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">通知公告</span>
                <a href="" class="more">更多</a>
            </div>
            <table class="table">
                <tbody>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                </tbody>
            </table>
        </div>

        <div class="tableArea">         
            <div class="tableTitle">
                <span class="titleLeft"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">通知公告</span>
                <a href="" class="more">更多</a>
            </div>
            <table class="table">
                <tbody>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                </tbody>
            </table>
        </div>

        <div class="tableArea">         
            <div class="tableTitle">
                <span class="titleLeft"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">通知公告</span>
                <a href="" class="more">更多</a>
            </div>
            <table class="table">
                <tbody>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                </tbody>
            </table>
        </div>

        <div class="tableArea">         
            <div class="tableTitle">
                <span class="titleLeft"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">通知公告</span>
                <a href="" class="more">更多</a>
            </div>
            <table class="table">
                <tbody>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                    <tr><td>123456789</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
