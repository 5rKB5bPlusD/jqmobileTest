<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="#">主页</a></li>
                <li><a href="#">第二页</a></li>
                <li><a href="#">搜索</a></li>
            </ul>
        </div>
    </div>

    <div data-role="main" class="ui-content">
        <p>我的内容..</p>
    </div>

    <div data-role="footer">
        <h1>我的底部</h1>
    </div>
</div>
</body>
</html>