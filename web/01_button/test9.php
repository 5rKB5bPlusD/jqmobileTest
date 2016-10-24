<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>小按钮</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>迷你按钮实例</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>迷你按钮与普通按钮:</p>
        <a href="#" class="ui-btn ui-mini">按钮 1</a>
        <a href="#" class="ui-btn">按钮 2</a>
        <br>

        <p>内联按钮：迷你与普通:</p>
        <a href="#" class="ui-btn ui-btn-inline ui-mini">按钮 1</a>
        <a href="#" class="ui-btn ui-btn-inline">按钮 2</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>