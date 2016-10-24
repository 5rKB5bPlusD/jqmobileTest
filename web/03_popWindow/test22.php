<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>弹窗对话框</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <a href="#myPopupDialog" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-corner-all ui-shadow ui-btn-inline">打开对话框弹窗</a>

        <div data-role="popup" id="myPopupDialog">
            <div data-role="header">
                <h1>头部文本</h1>
            </div>

            <div data-role="main" class="ui-content">
                <h2>欢迎访问弹窗对话框!</h2>
                <p>jQuery Mobile 非常有意思!</p>
                <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b ui-icon-back ui-btn-icon-left" data-rel="back">返回</a>
            </div>

            <div data-role="footer">
                <h1>底部文本</h1>
            </div>
        </div>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>