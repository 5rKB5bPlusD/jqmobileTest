<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>文体弹窗</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">显示弹窗</a>

        <div data-role="popup" id="myPopup" class="ui-content">
            <h3>欢迎!</h3>
            <p>"ui-content" 类在弹窗使用 <span style="font-size:55px;">样式文本</span> 时是特别有用的，它可以使得弹窗看起来更加美观时尚。 <strong>注意：</strong> 如果需要文本会包含多行。</p>
        </div>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>