<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>弹窗背景覆盖</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">显示弹窗</a>

        <div data-role="popup" id="myPopup" class="ui-content" data-overlay-theme="b">
            <p>在我身后有个深色背景。</p>
        </div>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>