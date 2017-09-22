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
      session_start();
      $this->addArticle();
    }

    private function addArticle() {
      $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    }
  }