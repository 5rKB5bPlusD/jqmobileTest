<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>不随内容滚动的面板</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="panel" id="myPanelDefault">
        <h2>面板头部</h2>
        <p>你可以使用按下 Esc 键、点击面板外部区域、通过滑动或点击下面按钮来关闭面板:</p>
        <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">关闭面板</a>
    </div>

    <div data-role="panel" id="myPanelFixed" data-position-fixed="true">
        <h2>Panel Header</h2>
        <p>你可以使用按下 Esc 键、点击面板外部区域、通过滑动或点击下面按钮来关闭面板:</p>
        <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">关闭面板</a>
    </div>

    <div data-role="header">
        <h1>页面头部</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>点击两个按钮并滚动查看效果。</p>
        <a href="#myPanelDefault" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">打开默认面板</a>
        <a href="#myPanelFixed" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">打开面板使用 data-position-fixed="true"</a>

        <p><b>提示:</b>要查看 data-position-fixed="true" 属性的效果，如果未出现滚动条可以重置窗口大小。</p>

        <p>用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。用于滚动的文本。。。。</p><br>
    </div>

    <div data-role="footer">
        <h1>页面底部</h1>
    </div>
</div>
</body>
</html>