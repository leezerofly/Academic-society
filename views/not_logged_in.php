<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="container">
        <!-- login form box -->
        <form class="form-signin" method="post" action="index.php" name="loginform">
            <h2 class="form-signin-heading">Please sign in</h2>
            
            <!-- <label for="login_input_username">Username</label> -->
            <input id="login_input_username" class="login_input form-control" type="text" name="user_name" placeholder="请输入用户名" required autofocus/>

            <!-- <label for="login_input_password">Password</label> -->
            <input id="login_input_password" class="login_input form-control" type="password" name="user_password" placeholder="请输入密码" autocomplete="off" required />

            <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="登录" />
            <a href="register.php" class="btn btn-lg btn-primary btn-block">注册</a>
        </form>
    </div>
</body>