<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../jquery.mobile-1.4.5/jquery.mobile-1.4.5.css">
    <script src="../../jquery/jquery.js"></script>
    <script src="../../jquery.mobile-1.4.5/jquery.mobile-1.4.5.js"></script>
    <title>在页面中添加 jQuery Mobile</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>欢迎! 点击以下链接跳转到第二个页面。 </p>
        <a href="#pagetwo" >跳转到第二个页面</a>
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
        <p>这是第二个页面。点击以下链接跳转到第一个页面。</p>
        <a href="#pageone">跳转到第一个页面</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>