<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>定位弹窗</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <a href="#myPopup1" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-position-to="window">弹窗窗口显示</a>
        <a href="#myPopup2" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-position-to="#demo">弹窗显示在 id="demo" 元素上</a>
        <a href="#myPopup3" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-position-to="origin">默认显示</a>

        <div data-role="popup" id="myPopup1" class="ui-content">
            <p>我显示在窗口的中间部分。</p>
        </div>
        <div data-role="popup" id="myPopup2" class="ui-content">
            <p>我显示在 id="demo" 的元素上。</p>
        </div>
        <div data-role="popup" id="myPopup3" class="ui-content">
            <p>我显示在点击的按钮上。</p>
        </div>

        <p>这是一个段落。</p>
        <p>这是另外一个段落。</p>
        <p>这还是一个段落。</p>
        <p>这是一个段落。这个段落包含了子元素：这是一个插入在段落中 id="demo" 的 <span id="demo" style="color:red;">span</span> 元素 。</p>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>