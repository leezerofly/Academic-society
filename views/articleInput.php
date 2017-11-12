<?php
  // 引入顶部及导航栏
  // 内含bootstrap和jQuery
  include("top.php");
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
  <!--建议手动加载语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
  <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
  <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

  <!-- 引入自定义样式 -->
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/add-article.css">
  
</head>
<body>
  <div class="mainpart">
    <form action="addArticle.php" method="post">
      <div class="row">
        <!-- 文章标题 -->
        <div class="form-group col-md-9">
            <label for="articleTitle">文章标题</label>
            <input type="text" class="form-control" id="articleTitle" name="articleTitle" placeholder="请输入文章标题" required>
        </div>
        <!-- 文章类型 -->
        <div class="form-group col-md-3">
            <label for="articleTypeId">文章类型</label>
            <select class="form-control" id="articleTypeId" name="articleTypeId"  >
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
      </div>

        <!-- 引入ueditor -->
        <script id="editor" name="articleContent" type="text/plain" style="width:100%;height:500px;"></script>

        <!-- 发表按钮 -->      
        <button type="submit" class="btn btn-info btn-publish center-block" name="addBtn" onclick="confirmPub()">发表</button>
    </form>
  </div>

  <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    // var ue = UE.getEditor('editor');
    var ue = UE.getEditor('editor',{  
        //自定义工具栏
        toolbars:[[
            'fullscreen',
            'undo', 'redo', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'autotypeset', 'blockquote', 'pasteplain', 
        ],
        [
            'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'template', '|',
            'horizontal', 'date', 'time', 'spechars', 'snapscreen',
        ],
        [
            'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
            'help'
        ]],  
        //focus时自动清空初始化时的内容  
        autoClearinitialContent:true,  
        //字数统计  
        wordCount:true,  
        //关闭elementPath  
        elementPathEnabled:false,  
        //默认的编辑区域高度  
        initialFrameHeight:300  
        //更多其他参数，请参考ueditor.config.js中的配置项  
    });

    // 确认弹框
    function confirmPub() {  
      var msg = "确定发表文章吗？";  
      if (confirm(msg)==true){  
          return true;  
      }else{  
          return false;  
      }  
    }  
  </script>
</body>
</html>