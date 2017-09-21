<h1>从零开始php</h1>

南昌大学管理学院学习研究会网站，主要功能是注册登录以及发布文章删除文章
此前学过一点jsp，没有学过php，但因为觉得这个项目比较适合用php写，便直接开始动手了。

此文档用来记录我在独立开发该项目时遇到的步骤以及各种问题。

其中注册登录功能的实现借鉴了php-login-minimal
https://github.com/panique/php-login-minimal

php使用include或require_once路径问题：
php不像html有根目录'/'，于是不容易表示绝对路径，大多采用相对路径
文件A 与包含文件B的文件夹同级，则在A中，B的相对路径为A/B
文件B 与包含文件C的文件夹同级，则在B中，C的相对路径为C/B
这时如果A中inclue B，B中又include C
则C的相对路径变成了C/A
实际上C的真实路径为C/B/A！

但似乎不影响html的路径

解决方法：
