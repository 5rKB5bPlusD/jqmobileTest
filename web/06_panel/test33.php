<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>滑出面板方式</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="panel" id="overlayPanel" data-display="overlay">
        <h2>覆盖面板</h2>
        <p>你可以使用按下 Esc 键、点击面板外部区域、通过滑动或点击下面按钮来关闭面板：</p>
        <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">关闭面板</a>
    </div>
    <div data-role="panel" id="revealPanel" data-display="reveal">
        <h2>滑出面板</h2>
        <p>你可以使用按下 Esc 键、点击面板外部区域、通过滑动或点击下面按钮来关闭面板：</p>
        <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">关闭面板</a>
    </div>
    <div data-role="panel" id="pushPanel" data-display="push">
        <h2>推动面板</h2>
        <p>你可以使用按下 Esc 键、点击面板外部区域、通过滑动或点击下面按钮来关闭面板：</p>
        <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">关闭面板</a>
    </div>

    <div data-role="header">
        <h1>页面头部</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>点击以下按钮查看面板的不同展示方式。</p>
        <a href="#overlayPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">覆盖面板</a>
        <a href="#revealPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">滑出面板</a>
        <a href="#pushPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">推动面板</a>
    </div>

    <div data-role="footer">
        <h1>页面底部</h1>
    </div>
</div>
</body>
</html>