<?php
  //引入顶部及导航栏
  include("top.php");

  //引入AddArticle类
  require_once("../classes/AddArticle.php");

  $addArticle = new AddArticle();

  //输出错误及提示信息
  if (isset($addArticle)) {
    if ($addArticle->errors) {
        foreach ($addArticle->errors as $error) {
            echo $error;
        }
    }
    if ($addArticle->messages) {
        foreach ($addArticle->messages as $message) {
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
  <title>发表文章</title>

  <!-- 加载富文本框ueditor -->
  <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
  <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
  <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
  <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

  <!-- 引入bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">  

  <!-- 引入自定义样式 -->
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/addArticle.css">
  
</head>
<body>
  <div class="mainpart">
    <formclass="form-horizontal" action="addArticle.php" method="post">
        <!-- 文章标题 -->
        <div class="form-group">
            <label for="articleTitle">文章标题</label>
            <input calss="form-control" id="articleTitle" name="articleTitle" type="text" placeholder="请输入文章标题" required>
        </div>
        <!-- 文章类型 -->
        <div class="form-group">
            <label for="articleTypeId">文章类型</label>
            <select calss="form-control" id="articleTypeId" name="articleTypeId"  >
                <option value ="1">学会新闻</option>
                <option value ="2">通知公告</option>
                <option value ="3">文章类型3</option>
                <option value ="4">文章类型4</option>
                <?php
                if($login->isAdmin()) {
                    echo "
                    <option value =\"5\">组织机构</option>
                    <option value =\"6\">理事名单</option>
                    <option value =\"7\">学会章程</option>
                    <option value =\"8\">政策文件</option>
                    <option value =\"9\">学会名人</option>
                    <option value =\"10\">培训信息</option>
                    ";
                }
                ?>
            </select>
        </div>

        <!-- 引入ueditor -->
        <script id="editor" name="articleContent" type="text/plain" style="width:100%;height:500px;"></script>

        <!-- 发表按钮 -->
        <!-- <input type="submit" calss="btn" name="addBtn" value="提交"/> -->
        <button class="btn btn-info" type="submit">发表</button>
    </form>
  </div>


  <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    // var ue = UE.getEditor('editor');
    var ue = UE.getEditor('editor',{  
        //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个  
        toolbars:[[
            'fullscreen', 
            'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe', 'insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
            'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
            'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
            'print', 'preview', 'searchreplace', 'drafts', 'help'
        ]],  
        //focus时自动清空初始化时的内容  
        autoClearinitialContent:true,  
        //关闭字数统计  
        wordCount:false,  
        //关闭elementPath  
        elementPathEnabled:false,  
        //默认的编辑区域高度  
        initialFrameHeight:300  
        //更多其他参数，请参考ueditor.config.js中的配置项  
    });
  </script>
</body>
</html>