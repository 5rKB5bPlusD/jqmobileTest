<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>黑白色图标</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>按钮</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>白色 "搜索" 图标 (默认):</p>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-left ui-corner-all ui-shadow">白色图标(默认)</a>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-notext ui-corner-all ui-shadow">白色图标(默认)</a>

        <p>黑色 "搜索" 图标  (class="ui-alt-icon"):</p>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-left ui-corner-all ui-shadow ui-alt-icon">黑色图标</a>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-notext ui-corner-all ui-shadow ui-alt-icon">黑色图标</a>

        <p>黑色 "搜索" 图标不使用灰色圆圈 (组合使用 "ui-nodisc-icon" 和 "ui-alt-icon"):</p>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-left ui-corner-all ui-shadow ui-nodisc-icon ui-alt-icon">黑色图标</a>
        <a href="#" class="ui-btn ui-btn-inline ui-icon-search ui-btn-icon-notext ui-corner-all ui-shadow ui-nodisc-icon ui-alt-icon">黑色图标</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>