<!doctype html>
<html lang="en">
<head>
    <?php
    include '../common/common.php';
    echo $head ?>
    <meta charset="UTF-8">
    <title>按钮样式</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>灰色与黑色按钮</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>普通按钮:</p>
        <a href="#" class="ui-btn">灰色按钮 (默认)</a>
        <a href="#" class="ui-btn ui-btn-b">黑色按钮</a>
        <br>

        <p>内联按钮:</p>
        <a href="#" class="ui-btn ui-btn-inline">灰色按钮 (默认)</a>
        <a href="#" class="ui-btn ui-btn-inline ui-btn-b">黑色按钮</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>