<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>导航栏按下状态保持</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="#" class="ui-btn-active ui-state-persist" data-icon="home">首页</a></li>
                <li><a href="#pagetwo" data-icon="arrow-r">页面二</a></li>
            </ul>
        </div>
    </div>

    <div data-role="main" class="ui-content">
        <p>本例设有 ui-btn-active 类，请注意首页按钮时突出显示的（已选）。</p>
        <p>请点击页面二按钮，看看会发生什么。</p>
    </div>

    <div data-role="footer">
        <h1>我的页脚</h1>
    </div>
</div>

<div data-role="page" id="pagetwo">
    <div data-role="header">
        <h1>欢迎来到我的主页</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="#pageone" data-icon="home">首页</a></li>
                <li><a href="#" class="ui-btn-active ui-state-persist" data-icon="arrow-r">页面二</a></li>
            </ul>
        </div>
    </div>

    <div data-role="main" class="ui-content">
        <p>该页面的按钮也会被突出显示，归功于 ui-btn-active 类。</p>
        <p>如果返回首页，您会发现页面将保持状态，归功于 ui-state-persist 类。</p>
    </div>

    <div data-role="footer">
        <h1>我的页脚</h1>
    </div>
</div>
</body>
</html>