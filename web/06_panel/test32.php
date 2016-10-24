<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>简单的面板</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="panel" id="myPanel" data-dismissible="true">
        <h2>面板头部</h2>
        <p>你可以通过点击面板外部区域或按下 Esc 键或滑动来关闭面板。</p>
        <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">关闭面板</a>
    </div>

    <div data-role="header">
        <h1>页面头部</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>点击下面按钮打开面板。</p>
        <a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">打开面板</a>
    </div>

    <div data-role="footer">
        <h1>页面底部</h1>
    </div>
</div>
</body>
</html>