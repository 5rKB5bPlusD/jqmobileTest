<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>grid网络布局</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>响应式布局</h1>
    </div>

    <div data-role="main" class="ui-content">
        <h3>慢慢重置窗口大小。布局会根据浏览器的宽度变化自适应大小。</h3>
        <div class="ui-grid-b ui-responsive"><!--ui-responsive响应式-->
            <div class="ui-block-a">
                <a href="#" class="ui-btn ui-corner-all ui-shadow">第一列按钮</a><br>
                <span>第一列: 这是一些文本。 这是一些文本。 这是一些文本。 这是一些文本。 这是一些文本。</span>
            </div>
            <div class="ui-block-b">
                <a href="#" class="ui-btn ui-corner-all ui-shadow">第二列按钮</a><br>
                <span>第二列: 这是一些文本。 这是一些文本。 这是一些文本。 这是一些文本。</span>
            </div>
            <div class="ui-block-c">
                <a href="#" class="ui-btn ui-corner-all ui-shadow">第三列按钮</a><br>
                <span>第三列: 这是一些文本。 这是一些文本。 这是一些文本。 这是一些文本。</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>