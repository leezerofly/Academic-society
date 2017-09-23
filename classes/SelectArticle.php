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
          $sql1 = "SELECT * FROM article WHERE article_type_id = '" . $articleTypeId . "' ORDER BY article_id DESC LIMIT 5;";
          $result = $this->db_connection->query($sql1);      

          while($row=$result->fetch_assoc()){
              echo "<tr><td>".$row["article_title"]."</td></tr>";
          }

          // if user has been added successfully
          if ($row) {
              $this->messages[] = "查询成功！";
          } else {
              $this->errors[] = "对不起，查询失败失败，请您返回重试。";
          }

        } else {
            $this->errors[] = "数据库连接失败。";
        }
    }
  }