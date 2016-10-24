<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>定义位置</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="panel" id="myPanel" data-position="right">
        <h2>面板头部</h2>
        <p>你可以使用按下 Esc 键、点击面板外部区域、通过滑动或点击下面按钮来关闭面板:</p>
        <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">关闭面板</a>
    </div>

    <div data-role="header">
        <h1>页面头部</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>打开下面按钮显示面板</p>
        <a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">打开面板</a>
    </div>

    <div data-role="footer">
        <h1>页面底部</h1>
    </div>
</div>
</body>
</html>