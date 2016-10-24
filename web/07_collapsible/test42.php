<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>图标位置</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>折叠块</h1>
    </div>

    <div data-role="main" class="ui-content">
        <div data-role="collapsible" data-iconpos="right">
            <h1>点击我 - 我可以折叠！</h1>
            <p>折叠项中图标的位置只能是 "left" 或 "right"。 <b>注意：</b> 默认为 left。</p>
        </div>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>