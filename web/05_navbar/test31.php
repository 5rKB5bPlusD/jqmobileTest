<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>超过五个按钮情况</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>欢迎来到我的首页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <div data-role="navbar">
            <ul>
                <li><a href="#" data-icon="plus">更多</a></li>
                <li><a href="#" data-icon="minus">更少</a></li>
                <li><a href="#" data-icon="delete">删除</a></li>
                <li><a href="#" data-icon="check">喜爱</a></li>
                <li><a href="#" data-icon="info">信息</a></li>
                <li><a href="#" data-icon="forward">向前</a></li>
                <li><a href="#" data-icon="back">向后</a></li>
                <li><a href="#" data-icon="star">星形</a></li>
                <li><a href="#" data-icon="gear">选项</a></li>
                <li><a href="#" data-icon="search">搜索</a></li>
            </ul>
        </div>
        <p>该例演示当导航栏包含超过五个按钮时的情况。</p>
    </div>

    <div data-role="footer">
        <h1>我的底部</h1>
    </div>
</div>
</body>
</html>