## 从零开始php

>南昌大学管理学院学习研究会网站，主要功能是注册登录以及发布文章删除文章
此前学过一点jsp，没有学过php，但因为觉得这个项目比较适合用php写，便直接开始动手了。

此文档用来记录我在独立开发该项目时遇到的步骤以及各种问题。

其中注册登录功能的实现借鉴了php-login-minimal
https://github.com/panique/php-login-minimal

### php使用include或require_once路径问题：
php不像html有根目录'/'，于是不容易表示绝对路径，大多采用相对路径

文件A 与包含文件B的文件夹同级，则在A中，B的相对路径为A/B

文件B 与包含文件C的文件夹同级，则在B中，C的相对路径为C/B

这时如果A中inclue B，B中又include C

则C的相对路径变成了C/A
### 实际上C的真实路径为C/B/A！

html的路径似乎也会受影响

## 解决方法：






## 使用ueditor富文本框(这里用的是1.4.3.3PHP版本http://ueditor.baidu.com/website/download.html)
1. 将ueditor解压出来的文件夹放在文件目录中（具体目录没有要求，之后引入js文件时地址正确即可）

2. 然后新建一个html或php等文件，
在head部分引入三个js文件：

```
  <!-- 加载富文本框ueditor -->

  <script type="text/javascript" charset="utf-8" src="/utf8-php/ueditor.config.js"></script>
  
  <script type="text/javascript" charset="utf-8" src="/utf8-php/ueditor.all.min.js"> </script>
  
  <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
  
  <script type="text/javascript" charset="utf-8" src="/utf8-php/lang/zh-cn/zh-cn.js"></script>
  
```

3. 在body部分引入：

```
<script id="editor" name="editorContent" type="text/plain" style="width:100%;height:500px;"></script>
（这里style可以设置文本框宽高）
```

## 关于php读取ueditor内容：

首先用表单<form>包裹上文第3步，提交到demo.php：

*a.php:*

```
<form action="demo.php" method="post">
    <script id="editor" type="text/plain" style="width:100%;height:500px;"></script>
    <input type="submit" value="提交"/>
</form>
```
*demo.php*

```
<?php
header("Content-type: text/html; charset=utf-8");
print_r($_POST);
?>
```

在*a.php*中script那里加一个name属性:

```
<form action="demo.php" method="post">
    <script id="editor" name="editorContent" type="text/plain" style="width:100%;height:500px;"></script>
    <input type="submit" value="提交"/>
</form>
```

未完待续
```
<?php
header("Content-type: text/html; charset=utf-8");
print_r($_POST["editorContent"]);
?>
```