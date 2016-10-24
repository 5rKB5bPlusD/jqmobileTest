<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../jquery.mobile-1.4.5/jquery.mobile-1.4.5.css">
    <script src="../../jquery/jquery.js"></script>
    <script src="../../jquery.mobile-1.4.5/jquery.mobile-1.4.5.js"></script>
    <title>内联按钮</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>普通 / 默认按钮:</p>
        <a href="#pagetwo" class="ui-btn">访问第二个页面</a>
        <p>内联按钮:</p>
        <a href="#pagetwo" class="ui-btn ui-btn-inline">访问第二个页面</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>

<div data-role="page" id="pagetwo">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>内联按钮 (一个接一个显示):</p>
        <a href="#pageone" class="ui-btn ui-btn-inline">返回第一个页面</a>
        <a href="#pageone" class="ui-btn ui-btn-inline">返回第一个页面</a>
        <a href="#pageone" class="ui-btn ui-btn-inline">返回第一个页面</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>