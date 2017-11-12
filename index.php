<?php
    include("views/top.php");

    require_once("classes/SelectArticle.php");

    $selectArticle = new SelectArticle();

    //输出错误及提示信息
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
    <title>首页</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <article>
    <!-- 导航条 -->
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
                <!-- 可加文字 -->
                <!-- <div class="carousel-caption">
                    ...
                </div> -->
            </div>
            <div class="item">
                <img src="img/2016013008584330.jpg" alt="...">
            </div>
            <div class="item">
                <img src="img/2016013008584330.jpg" alt="...">
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
    
    <!-- 各文章列表 -->
    <div class="row article-list">
        <div class="col-md-6 board">         
            <div class="board-title">
                <span class="title-left"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">学会新闻</span>
                <a href="/views/articleFromTypeAll.php?article_type_id=1" class="btn btn-default btn-xs pull-right">更多></a>
            </div>
            <div class="list-group">
                <?php  
                    $selectArticle->selectArticleTitle(1);
                ?>
            </div>
        </div>

        <div class="col-md-6 board">         
            <div class="board-title">
                <span class="title-left"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">通知公告</span>
                <a href="/views/articleFromTypeAll.php?article_type_id=2" class="btn btn-default btn-xs pull-right">更多</a>
            </div>
            <div class="list-group">
                <?php  
                    $selectArticle->selectArticleTitle(2);
                ?>
            </div>
        </div>

        <div class="col-md-6 board">         
            <div class="board-title">
                <span class="title-left"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">文章类型3</span>
                <a href="/views/articleFromTypeAll.php?article_type_id=3" class="btn btn-default btn-xs pull-right">更多</a>
            </div>
            <div class="list-group">
                <?php  
                    $selectArticle->selectArticleTitle(3);
                ?>
            </div>
        </div>

        <div class="col-md-6 board">         
            <div class="board-title">
                <span class="title-left"><img src="img/titleLeft.png" alt=""></span>
                <span class="font4">文章类型4</span>
                <a href="/views/articleFromTypeAll.php?article_type_id=4" class="btn btn-default btn-xs pull-right">更多</a>
            </div>
            <div class="list-group">
                <?php  
                    $selectArticle->selectArticleTitle(4);
                ?>
            </div>
        </div>
    </div>
    </article>

    <!-- 网站底部 -->
    <?php include("views/bottom.php"); ?>
</body>
</html>
