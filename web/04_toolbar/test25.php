<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>头部栏</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">主页</a>
        <h1>欢迎访问我的主页</h1>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-search ui-btn-icon-left">搜索</a>
    </div>

    <div data-role="main" class="ui-content">
        <p>注意我们在头部按钮上添加了  "ui-corner-all" 和 "ui-shadow" 类，使他看起来更美观点。</p>
    </div>
</div>
</body>
</html>