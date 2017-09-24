<?php

  class DeleteArticle {
    //数据库对象
    private $db_connection = null;
     
    //将错误信息存入数组
    public $errors = array();

    //将成功提示存入数组
    public $messages = array();

    public function __construct() {
    }

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
          $sql1 = "DELETE FROM article WHERE article_id = '" . $articleId . "';";
          $result = $this->db_connection->query($sql1);

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
  }
