<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>迷你</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>可折叠块</h1>
    </div>

    <div data-role="main" class="ui-content">
        <div data-role="collapsible" data-mini="true">
            <h1>点击我 - 我是可折叠的！</h1>
            <p>我是可折叠的内容。</p>
        </div>
    </div>

    <div data-role="footer">
        <h1>页脚</h1>
    </div>
</div>
</body>
</html>