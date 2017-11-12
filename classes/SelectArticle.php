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

    // 首页按照文章分类读取每类所有文章并生成链接
    public function selectArticleTitleAll($articleTypeId) {
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {

            // 根据文章类型id article_type_id 倒序查询top5的文章标题 article_title       
            $sql = "SELECT * FROM article WHERE article_type_id = '" . $articleTypeId . "' ORDER BY article_id DESC;";
            $result = $this->db_connection->query($sql);      

            while($row=$result->fetch_assoc()){
                echo "<a href=\"/views/articleContent.php?article_id=".$row["article_id"]."\" class=\"list-group-item\">".
                        "<p>".$row["article_title"]."</p>".
                        $row["article_time"].
                    "</a>";
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
            echo "<a href=\"/views/articleContent.php?article_id=".$row["article_id"]."\" class=\"list-group-item\">".
                    "<p>".$row["article_title"]."</p>".
                    $row["article_time"].
                "</a>
                <a href=\"/views/adminArticle.php?article_id=".$row["article_id"]."\" onclick=\"return confirmDel()\">删除</a>";
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
                  <div class=\"content\">"
                  .$row['article_content'].
                  "</div>
                  <br/>
                  <div class=\"bottom\">
                  发帖人：".$row['user_name'].
                  "发帖时间：".$row['article_time'].
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
                    <div class=\"content\">"
                    .$row['article_content'].
                    "</div>
                    <br/>
                    <div class=\"bottom\">
                    发布时间："
                    .$row['article_time'].
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