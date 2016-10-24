<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>按钮添加阴影</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>按钮阴影实例</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>有阴影的按钮与没阴影的按钮:</p>
        <a href="#" class="ui-btn ui-shadow">按钮 1</a>
        <a href="#" class="ui-btn">按钮 2</a>
        <br>

        <p>有阴影的按钮与没阴影的内联按钮:</p>
        <a href="#" class="ui-btn ui-btn-inline ui-shadow">按钮 1</a>
        <a href="#" class="ui-btn ui-btn-inline">按钮 2</a>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>