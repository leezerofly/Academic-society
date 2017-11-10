<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php echo $_SESSION['user_name']; ?>，您好！

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="/index.php?logout" class="btn btn-xs btn-danger">退出</a>
