<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../jquery.mobile-1.4.5/jquery.mobile-1.4.5.css">
    <script src="../../jquery/jquery.js"></script>
    <script src="../../jquery.mobile-1.4.5/jquery.mobile-1.4.5.js"></script>
    <title>Document</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>访问第二个页面</h1>
    </div>

    <div data-role="main" class="ui-content">
        <a href="#pagetwo" class="ui-btn">访问第二个页面</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>

<div data-role="page" id="pagetwo">
    <div data-role="header">
        <h1>返回按钮实例</h1>
    </div>

    <div data-role="main" class="ui-content">
        <a href="#" class="ui-btn" data-rel="back">返回</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>