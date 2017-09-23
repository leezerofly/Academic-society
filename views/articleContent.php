<?php
  include("top.php");

  $articleId = isset($_GET['article_id'])? $_GET['article_id'] : 0; 
  
  $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if (!$db_connection->set_charset("utf8")) {
    echo $db_connection->error;
  }

  $sql ="SELECT * FROM article WHERE article_id='".$articleId."'";
  $result = $db_connection->query($sql); 
  // $result = mysqli_query($sql); 

  if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
      echo "<div class=\"mainpart\">
        <h1 class=\"title\">".$row['article_title']."</h1>
        <div class=\"content\">"
        .$row['article_content'].
        "</div>
        <div class=\"bottom\">"
        .$row['article_time'].
        "</div>
      </div>";
    }
  } else {
    echo "0 结果";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文章详情</title>

  <link rel="stylesheet" href="/css/articleContent.css">
</head>
<body>
  
</body>
</html>