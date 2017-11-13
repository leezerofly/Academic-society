<?php
// include the configs / constants for the database connection
require_once("../config/db.php");

require_once("../classes/Registration.php");

$registration = new Registration();

// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
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
    <title>注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="/framework/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- 自定义样式 -->
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/sign.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- register form -->
        <form class="form-signup" id="usersignup" method="post" action="register.php" name="registerform">
            <h2 class="form-signup-heading">注册</h2>

            <!-- the user name input field uses a HTML5 pattern check -->
            <!-- <label for="login_input_username">账号（仅可使用字母或数字，2~64个字）</label> -->
            <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="账号:仅可使用2~64位的数字或字母" required />
            <!-- <input name="user_name" id="newuser" type="text" class="form-control" placeholder="账号（仅可使用字母或数字，2~64个字）" pattern="[a-zA-Z0-9]{2,64}" autofocus required /> -->

            <!-- the email input field uses a HTML5 email type check -->
            <!-- <label for="login_input_email">用户邮箱</label> -->
            <input id="login_input_email" class="login_input form-control" type="email" name="user_email" placeholder="用户邮箱：example@qq.com" required />
            <!-- <input name="user_email" id="email" type="text" class="form-control" placeholder="用户邮箱"> -->
            <br>

            <!-- <label for="login_input_password_new">密码（最小6位）</label> -->
            <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" pattern=".{6,}" placeholder="密码（最小6位）" required autocomplete="off" />
            <!-- <input name="password1" id="password1" type="password" class="form-control" placeholder="Password"> -->

            <!-- <label for="login_input_password_repeat">确认密码</label> -->
            <input id="login_input_password_repeat" class="login_input form-control" type="password" name="user_password_repeat" pattern=".{6,}" placeholder="确认密码" required autocomplete="off" />
            <br>

            <!-- <input type="submit"  name="register" value="注册" /> -->
            <button name="register" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
            <a href="/index.php" class="btn btn-lg btn-primary btn-block">返回登录页面</a>
            <br>
        </form>
    </div>

    <!-- backlink -->
    <!-- <a href="index.php" class="btn btn-lg btn-primary btn-block">返回登录页面</a> -->
</body>
</html>