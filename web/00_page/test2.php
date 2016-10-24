<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../jquery.mobile-1.4.5/jquery.mobile-1.4.5.css">
    <script src="../../jquery/jquery.js"></script>
    <script src="../../jquery.mobile-1.4.5/jquery.mobile-1.4.5.js"></script>
    <title>页面作为对话框使用</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>欢迎!</p>
        <a href="#pagetwo">弹出对话框</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>

<div data-role="page" data-dialog="true" id="pagetwo">
    <div data-role="header">
        <h1>我是一个对话框！</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>对话框与普通页面不同，它显示在当期页面上, 但又不会填充完整的页面，顶部图标 "X" 用于关闭对话框。</p>
        <a href="#pageone">跳转到第一个页面</a>
    </div>

    <div data-role="footer">
        <h1>对话框底部文本</h1>
    </div>
</div>
</body>
</html>