<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>定位图标位置</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>图标定位</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>图标定位:</p>
        <a href="#" class="ui-btn ui-icon-search ui-btn-icon-top">顶部</a>
        <a href="#" class="ui-btn ui-icon-search ui-btn-icon-right">右侧</a>
        <a href="#" class="ui-btn ui-icon-search ui-btn-icon-bottom">底部</a>
        <a href="#" class="ui-btn ui-icon-search ui-btn-icon-left">Left</a>
    </div>

    <div data-role="footer">
        <h1>底部文本 Text</h1>
    </div>
</div>
</body>
</html>