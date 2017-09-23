<?php

  //建立一个添加文章的类，往数据库article表中插入文章内容
  class AddArticle {
    //数据库对象
    private $db_connection = null;

    //将错误信息存入数组
    public $errors = array();

    //将成功提示存入数组
    public $messages = array();

    public function __construct() {
      //创建session
      // session_start();
      if(isset($_POST["addBtn"]))
        $this->addArticle();
    }

    private function addArticle() {
      if (empty($_SESSION['user_name'])) {
        $this->errors[] = "用户名不存在";
      } elseif (empty($_POST["articleTitle"])) {
        $this->errors[] = "文章标题不能为空";
      } elseif (empty($_POST["articleContent"])) {
        $this->errors[] = "文章内容不能为空";
      } else {
        //连接数据库
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //将字符改为utf8并检验
        if (!$this->db_connection->set_charset("utf8")) {
          $this->errors[] = $this->db_connection->error;
        }

        //数据库正常连接
        if (!$this->db_connection->connect_errno) {
          
          //文章类型id
          $articleTypeId = $_POST['articleTypeId'];
          
          //文章标题
          $articleTitle = $_POST['articleTitle'];

          //文章内容
          $articleContent = $_POST["articleContent"];

          // escaping, additionally removing everything that could be (html/javascript-) code
          $user_name = $this->db_connection->real_escape_string(strip_tags($_SESSION['user_name'], ENT_QUOTES));

          // 根据user_name查询user_id         
          $sql1 = "SELECT * FROM users WHERE user_name = '" . $user_name . "';";
          $result = $this->db_connection->query($sql1);
          $row = $result->fetch_assoc();
          $articleUserId = $row['user_id'];

          // 将 文章类型id·文章标题·文章内容·发表文章用户id 插入数据库
          $sql2 = "INSERT INTO article (article_type_id, article_title, article_content, article_user_id)
                  VALUES('" . $articleTypeId . "', '" . $articleTitle . "', '" . $articleContent ."', '".$articleUserId."');";
          $query_new_article_insert = $this->db_connection->query($sql2);

          // if user has been added successfully
          if ($query_new_article_insert) {
              $this->messages[] = "文章发表成功！";
          } else {
              $this->errors[] = "对不起，文章发表失败，请您返回重试。";
          }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
        echo $_SESSION['user_name'];
        print_r($_POST["articleTitle"]);
      }
    }
  }