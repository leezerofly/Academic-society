<?php

  //建立一个查询文章的类，往数据库article表中插入文章内容
  class SelectArticle {
    //数据库对象
    private $db_connection = null;

    //将错误信息存入数组
    public $errors = array();

    //将成功提示存入数组
    public $messages = array();

    public function __construct() {
    }

    // 根据文章id删除文章
    public function deleteArticle($articleId) {
        if (empty($_SESSION['user_name'])) {
          $this->errors[] = "请先登录";
        } elseif ($_SESSION['user_type'] != 1) {
          $this->errors[] = "您不是管理员，没有权限删除文章";
        } else {
          // 连接数据库
          $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
          
          // 将字符改为utf8并检验
          if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
          }
  
          // 数据库正常连接
          if (!$this->db_connection->connect_errno) {
  
            // 根据文章类型id 删除       
            $sql = "DELETE FROM article WHERE article_id = '" . $articleId . "';";
            $result = $this->db_connection->query($sql);
  
            // 删除成功
            if ($result) {
                $this->messages[] = "删除成功！";
            } else {
                $this->errors[] = "对不起，删除失败，请您返回重试。";
            }
  
          } else {
              $this->errors[] = "数据库连接失败。";
          }
        }
    }

    // 首页按照文章分类读取每类前5篇文章并生成链接
    public function selectArticleTitle($articleTypeId) {
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
          $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {

          // 根据文章类型id article_type_id 倒序查询top5的文章标题 article_title       
          $sql = "SELECT * FROM article WHERE article_type_id = '" . $articleTypeId . "' ORDER BY article_id DESC LIMIT 5;";
          $result = $this->db_connection->query($sql);      

          while($row=$result->fetch_assoc()){
              echo "<a href=\"/views/articleContent.php?article_id=".$row["article_id"]."\" class=\"list-group-item\">".
                        "<p>".$row["article_title"]."</p>".
                        $row["article_time"].
                    "</a>";
          } 

          // if user has been added successfully
          if ($row) {
              $this->messages[] = "查询成功！";
          } else {
              $this->errors[] = "对不起，查询失败，请您返回重试。";
          }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
    }

    // 首页，点击更多按钮，按照文章分类读取每类所有文章并生成链接
    public function selectArticleTitleType($articleTypeId) {
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {
            // $pageSize = 10;
            // $sqlCount = "SELECT COUNT(*) as total FROM article WHERE article_type_id = '" . $articleTypeId . "';";
            // $rsCount = $this->db_connection->query($sqlCount);      
            // $myrow = $rsCount->fetch_row();
            // $totalCounts = $myrow[0];
            // $offset=$pagesize*($currentPage - 1);
            // 根据文章类型id article_type_id 倒序查询文章标题 article_title       
            // $sql = "SELECT * FROM article WHERE article_type_id = '" . $articleTypeId . "' ORDER BY article_id DESC LIMIT ".$offset.",".$pagesize.";";
            $sql = "SELECT * FROM article WHERE article_type_id = '" . $articleTypeId . "' ORDER BY article_id DESC;";
            $result = $this->db_connection->query($sql);    

            while($row=$result->fetch_assoc()){
                echo "<a href=\"/views/articleContent.php?article_id=".$row["article_id"]."\" class=\"list-group-item\">".
                        "<p>".$row["article_title"]."</p>".
                        $row["article_time"].
                    "</a>";
            }
            // echo "
            // <script>
            //     $('#jqPaginator').jqPaginator({
            //         totalCounts: ".$totalCounts.",
            //         pageSize: ".$pageSize.",
            //         visiblePages: 10,
            //         currentPage: 1,
            //         onPageChange: function (num) {
            //             $('#text').html('');
            //         }
            //     });
            // </script>";
            // $('#box').paging({
            //     initPageNo: 1, // 初始页码
            //     totalPages: totalPages, //总页数
            //     totalCount: '合计' + setTotalCount + '条数据', // 条目总数
            //     slideSpeed: 600, // 缓动速度。单位毫秒
            //     jump: true, //是否支持跳转
            //     callback: function(page) { // 回调函数
            //         console.log(page);
            //     }
            // })
            // 如果查询成功
            if ($row) {
                $this->messages[] = "查询成功！";
            } else {
                $this->errors[] = "对不起，查询失败，请您返回重试。";
            }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
    }

    // 管理员按照文章分类id读取每类所有文章的总数,并生成分页插件
    public function manageSelectArticleNumType($articleTypeId) {
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {
            $pageSize = 10;

            // 根据文章类型id article_type_id 倒序查询文章标题 article_title       
            $sql = "SELECT COUNT(*) AS total FROM article WHERE article_type_id = '" . $articleTypeId . "';";
            $result = $this->db_connection->query($sql);      

            $myrow = mysql_fetch_array($result);
            $numrows = $myrow[0];

            while($row=$result->fetch_assoc()){
                echo "                       
                    <div class=\"box center-block page-list\" id=\"box\"></div>
                    <script src=\"/js/paging.js\"></script>
                    <script>
                        var setTotalCount = ".$row['total'].";
                        var pageSize = 10;
                        if(setTotalCount % 10 > 0) {
                            var totalPages = parseInt(setTotalCount / pageSize) + 1;
                        } else {
                            var totalPages = parseInt(setTotalCount / pageSize);
                        }

                        $('#box').paging({
                            initPageNo: 1, // 初始页码
                            totalPages: totalPages, //总页数
                            totalCount: '合计' + setTotalCount + '条数据', // 条目总数
                            slideSpeed: 600, // 缓动速度。单位毫秒
                            jump: true, //是否支持跳转
                            callback: function(page) { // 回调函数
                                console.log(page);
                            }
                        })
                    </script>";
            } 

            // 如果查询成功
            if ($row) {
                $this->messages[] = "查询成功！";
            } else {
                $this->errors[] = "对不起，查询失败，请您返回重试。";
            }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
    }
    

    // 管理员按照文章分类id读取每类所有文章并生成链接及删除按钮
    public function manageSelectArticleTitleType($articleTypeId) {
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {

            // 根据文章类型id article_type_id 倒序查询文章标题 article_title       
            $sql = "SELECT * FROM article WHERE article_type_id = '" . $articleTypeId . "' ORDER BY article_id DESC;";
            $result = $this->db_connection->query($sql);      

            while($row=$result->fetch_assoc()){
                echo "<a href=\"/views/articleContent.php?article_id=".$row["article_id"]."\" 
                        class=\"list-group-item list-content col-md-11\">".
                        "<p>".$row["article_title"]."</p>".
                        $row["article_time"].
                    "</a>
                    <a href=\"/views/manageArticle.php?delete_article_id=".$row["article_id"]."\" class=\"btn btn-default col-md-1 btn-article\" onclick=\"return confirmDel()\">删除</a>";
            } 

            // 如果查询成功
            if ($row) {
                $this->messages[] = "查询成功！";
            } else {
                $this->errors[] = "对不起，查询失败，请您返回重试。";
            }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
    }

    // 管理员读取全部文章并生成链接和删除按钮
    public function selectAllTitle() {
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
          $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {

          // 根据文章类型id article_type_id 倒序查询top5的文章标题 article_title       
          $sql = "SELECT * FROM article ;";
          $result = $this->db_connection->query($sql);      

          while($row=$result->fetch_assoc()){
            echo "<a href=\"/views/articleContent.php?article_id=".$row["article_id"]."\" class=\"list-group-item col-md-11\">".
                    "<p>".$row["article_title"]."</p>".
                    $row["article_time"].
                "</a>
                <a href=\"/views/deleteArticle.php?article_id=".$row["article_id"]."\" class=\"btn btn-default col-md-1 btn-article-del\" onclick=\"return confirmDel()\">删除</a>";
          } 

          // 如果查询成功
          if ($row) {
              $this->messages[] = "查询成功！";
          } else {
              $this->errors[] = "对不起，查询失败，请您返回重试。";
          }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
    }

    // 根据文章id读取文章内容
    public function selectArticleFromId() {

        $articleId = isset($_GET['article_id'])? $_GET['article_id'] : 0; 
 
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {
            
            //内连接查询数据库表article和users
            $sql = "SELECT * FROM article,users WHERE article_id='".$articleId."' AND article_user_id=user_id";
            $result = $this->db_connection->query($sql); 
          
            if ($result->num_rows > 0) {
              // 输出数据
              while($row = $result->fetch_assoc()) {
                //帖子详情：内容，发帖人，发帖时间
                echo "<div class=\"mainpart\">
                    <div class=\"article-info font16\">
                        作者：".$row['user_name'].
                        "&nbsp;&nbsp;&nbsp;&nbsp;
                        发布时间：".$row['article_time'].
                    "</div>
                    <div class=\"content\">"
                    .$row['article_content'].
                    "</div>
                </div>";
              }
            }

            // 查询成功
            if ($row) {
                $this->messages[] = "查询成功！";
            } else {
                $this->errors[] = "对不起，查询失败，请您返回重试。";
            }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
    }

    // 根据文章type直接读取该类第一篇文章内容，用于学会各类通知
    public function selectArticleFromType() {

        $articleTypeId = isset($_GET['article_type_id'])? $_GET['article_type_id'] : 0; 
    
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {

            $sql = "SELECT * FROM article WHERE article_type_id='".$articleTypeId."' ORDER BY article_id DESC LIMIT 1";

            $result = $this->db_connection->query($sql); 
            // $result = mysqli_query($sql);  
            
            if ($result->num_rows > 0) {
                // 输出数据
                while($row = $result->fetch_assoc()) {
                echo "<div class=\"mainpart\">
                    <div class=\"article-info font16\">
                        发布时间：".$row['article_time'].
                    "</div>
                    <div class=\"content\">"
                    .$row['article_content'].
                    "</div>
                </div>";
                }
            }

            // 查询成功
            if ($row) {
                $this->messages[] = "查询成功！";
            } else {
                $this->errors[] = "对不起，查询失败，请您返回重试。";
            }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
    }
  }