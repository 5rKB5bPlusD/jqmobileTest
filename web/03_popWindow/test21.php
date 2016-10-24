<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>弹窗方向小边框</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>点击按钮打开一个带方向边框的弹窗。</p>
        <a href="#myPop1" data-rel="popup" class="ui-btn ui-btn-inline" data-position-to="#demo">左边</a>
        <a href="#myPop2" data-rel="popup" class="ui-btn ui-btn-inline" data-position-to="#demo">顶部</a>
        <a href="#myPop3" data-rel="popup" class="ui-btn ui-btn-inline" data-position-to="#demo">右边</a>
        <a href="#myPop4" data-rel="popup" class="ui-btn ui-btn-inline" data-position-to="#demo">底部</a>

        <div data-role="popup" id="myPop1" class="ui-content" data-arrow="l">
            <p>在左边框有个方向。</p>
        </div>
        <div data-role="popup" id="myPop2" class="ui-content" data-arrow="t">
            <p>在顶部边框有个方向。</p>
        </div>
        <div data-role="popup" id="myPop3" class="ui-content" data-arrow="r">
            <p>在右边框有个方向。</p>
        </div>
        <div data-role="popup" id="myPop4" class="ui-content" data-arrow="b">
            <p>在底部边框有个方向。</p>
        </div>

        <p>这是一个段落，用于实例展示。弹窗显示在 <span id="demo" style="color:red;">这里</span>。</p>
    </div>
    <div data-role="footer">

        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>