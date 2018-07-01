<?php
  // 建立一个管理article_type表的类
  class ManageType {
    // 数据库对象
    private $db_connection = null;

    // 将错误信息存入数组
    public $errors = array();

    // 将成功提示存入数组
    public $messages = array();

    public function __construct() {
    }

    // 新增分类
    public function createArticleType($typeName) {
      // 连接数据库
      $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

      // 将字符改为utf8并检验
      if (!$this->db_connection->set_charset("utf8")) {
        $this->errors[] = $this->db_connection->error;
      }

      // 数据库正常连接
      if (!$this->db_connection->connect_errno) {

        // 新增文章类型
        $sql = "INSERT INTO `article_type` (`type_id`, `type_name`) VALUES (NULL, '" . $typeName . "');";
        $result = $this->db_connection->query($sql);

        // 创建成功
        if ($result) {
            $this->messages[] = "新增分类成功！";
        } else {
            $this->errors[] = "对不起，新增失败，请您返回重试。";
        }

      } else {
          $this->errors[] = "数据库连接失败。";
      }
    }

    // 查询所有分类并返回$result
    public function selectArticleType() {
      //连接数据库
      $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

      //将字符改为utf8并检验
      if (!$this->db_connection->set_charset("utf8")) {
        $this->errors[] = $this->db_connection->error;
      }

      //数据库正常连接
      if (!$this->db_connection->connect_errno) {
      
        $sql = "SELECT * FROM article_type ORDER BY type_id;";
        $result = $this->db_connection->query($sql);      
        if ($result) {
            $this->messages[] = "查询成功！";
            return $result;
        } else {
            $this->errors[] = "对不起，查询失败，请您返回重试。";
        }
      } else {
          $this->errors[] = "数据库连接失败。";
      }
    }

    // 删除分类
    public function deleteArticleType($typeId) {
      //连接数据库
      $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

      //将字符改为utf8并检验
      if (!$this->db_connection->set_charset("utf8")) {
        $this->errors[] = $this->db_connection->error;
      }

      // 数据库正常连接
      if (!$this->db_connection->connect_errno) {

        // 根据文章类型id 删除       
        $sql = "DELETE FROM article_type WHERE type_id = '" . $typeId . "';";
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
    // 修改分类名
    public function updateArticleType($typeId, $typeName) {
      //连接数据库
      $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

      //将字符改为utf8并检验
      if (!$this->db_connection->set_charset("utf8")) {
        $this->errors[] = $this->db_connection->error;
      }

      // 数据库正常连接
      if (!$this->db_connection->connect_errno) {

        // 根据文章类型id 删除       
        $sql = "UPDATE article_type SET type_name = '" . $typeName . "' WHERE type_id = '" . $typeId . "';";
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