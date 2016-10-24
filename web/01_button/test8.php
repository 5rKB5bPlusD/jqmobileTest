<!doctype html>
<html lang="en">
<head>
    <?php
    include '../common/common.php';
    echo $head?>
    <meta charset="UTF-8">
    <title>圆角实例</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>圆角实例</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>按钮带圆角与不带圆角效果：</p>
        <a href="#" class="ui-btn ui-corner-all">按钮 1</a>
        <a href="#" class="ui-btn">按钮 2</a>
        <br>

        <p>内联按钮带圆角与不带圆角效果：</p>
        <a href="#" class="ui-btn ui-btn-inline ui-corner-all">按钮 2</a>
        <a href="#" class="ui-btn ui-btn-inline">按钮 2</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>