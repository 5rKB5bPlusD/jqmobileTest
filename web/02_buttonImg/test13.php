<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>只显示图标</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>图标</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>只显示图标不显示文本:</p>
        <a href="#" class="ui-btn ui-icon-search ui-btn-icon-notext">搜索</a>
        <p>只有图标没有文本的按钮 - 添加圆角及阴影:</p>
        <a href="#" class="ui-btn ui-shadow ui-corner-all ui-icon-search ui-btn-icon-notext">搜索</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>