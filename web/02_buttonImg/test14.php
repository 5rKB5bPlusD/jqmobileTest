<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>移除圆圈</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>Icons</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p> "搜索" 按钮使用灰色使用圆圈（默认）:</p>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-left ui-corner-all ui-shadow">使用圆圈（默认）</a>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-notext ui-corner-all ui-shadow">使用圆圈（默认）</a>

        <p>"搜索" 按钮使用不使用灰色圆圈(class="ui-nodisc-icon"):</p>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-left ui-corner-all ui-shadow ui-nodisc-icon">不使用灰色圆圈</a>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-notext ui-corner-all ui-shadow ui-nodisc-icon">不使用灰色圆圈</a>
        <p>注意，如果你指定了 ui-nodisc-icon 类，则只显示图标，灰色背景被移除，但圆圈还在。
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>