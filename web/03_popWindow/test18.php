<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>关闭弹窗</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
    </div>

    <div data-role="main" class="ui-content">
        <a href="#myPopup1" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">显示弹窗</a>

        <div data-role="popup" id="myPopup1" class="ui-content">
            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">关闭</a>
            <p>我在右上角有个关闭按钮</p>
            <p><b>提示:</b> 你也可以通过点击弹窗外的区域来关闭弹窗。</p>
        </div>
    </div>
    <div data-role="main" class="ui-content">
        <a href="#myPopup2" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">显示弹窗</a>

        <div data-role="popup" id="myPopup2" class="ui-content">
            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-left">关闭</a>
            <p>我在左上角有个关闭按钮</p>
            <p><b>提示:</b> 你也可以通过点击弹窗外的区域来关闭弹窗。</p>
        </div>
    </div>
    <div data-role="main" class="ui-content">
        <a href="#myPopup3" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">显示弹窗</a>

        <div data-role="popup" id="myPopup3" class="ui-content" data-dismissible="false" style="max-width:400px;">
            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">关闭</a>
            <p>我是不可取消的按钮 (data-dismissible="false)。唯一关闭这个弹窗的方式是通过点击右上角的关闭按钮。你无法通过点击弹窗之外的区域关闭弹窗。</p>
        </div>
    </div>
    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>