<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>以下演示了弹窗所有过渡效果的实例。</p>
        <p><b>注意：</b> 从性能方面上考虑， jQuery Mobile 推荐使用 "pop", "fade" 或 "none" 过渡效果。</p>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="fade">淡入</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="flip">翻转</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="flow">抛出当前页后显示</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="pop">弹出</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="slide">向左滑动</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="slidefade">向左滑动并淡入</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="slideup">向上滑动 up</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="slidedown">向下滑动</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="turn">转向</a>
        <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="none" >无过渡效果。</a>

        <div data-role="popup" id="myPopup" class="ui-content">
            <p>这是一个简单的弹窗。</p>
        </div>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>