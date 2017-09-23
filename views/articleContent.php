<?php
  include("top.php");

  $articleId = isset($_GET['article_id'])? $_GET['article_id'] : 0; 
  
  $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if (!$db_connection->set_charset("utf8")) {
    echo $db_connection->error;
  }

  $sql ="select * from article where article_id='".$articleId."'";
  $result = $db_connection->query($sql); 
  // $result = mysqli_query($sql); 

  if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
      echo "<h1>".$row['article_title']."</h1>";
      echo $row['article_content'];
    }
  } else {
    echo "0 结果";
  }
?>