<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="main" class="ui-content">
        <h2>请点击齿轮图标！</h2>
        <ul data-role="listview" data-inset="true">
            <li data-role="divider">浏览器</li>
            <li>
                <a href="#">
                    <img src="chrome.png">
                    <h2>Google Chrome</h2>
                    <p>Google Chrome 是免费的开源 web 浏览器。发布于 2008 年。</p>
                </a>
                <a href="#download" data-transition="pop" data-icon="gear">下载浏览器</a>
            </li>
            <li>
                <a href="#">
                    <img src="firefox.png">
                    <h2>Mozilla Firefox</h2>
                    <p>Firefox 是来自 Mozilla 的 web 浏览器。发布于 2004 年。</p>
                </a>
                <a href="#download" data-transition="pop" data-icon="gear">下载浏览器</a>
            </li>
        </ul>
    </div>
</div>

<div data-role="page" id="download" data-dialog="true">
    <div data-role="main" class="ui-content">
        <h3>拆分按钮实例</h3>
        <p>该按钮仅供演示。</p>
        <a href="#" class="ui-btn ui-btn-inline ui-btn-b ui-shadow ui-corner-all ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini" data-rel="back">下载</a>
        <a href="#" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-inline ui-mini" data-rel="back">取消</a>
    </div>
</div>
</body>
</html>