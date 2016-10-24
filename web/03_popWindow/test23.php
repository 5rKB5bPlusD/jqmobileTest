<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>图片弹窗</title>
</head>
<body>
<div data-role="page">
    <div data-role="header">
        <h1>欢迎访问我的主页</h1>
    </div>

    <div id="pageone" data-role="main" class="ui-content">
        <p>点击图片放大它。</p>
        <p>注意我们在右上角添加了 "返回按钮"。</p>
        <a href="#myPopup" data-rel="popup" data-position-to="window">
            <img src="http://www.runoob.com/wp-content/uploads/2015/10/runoob.jpeg" alt="Skaret View" style="width:200px;"></a>

        <div data-role="popup" id="myPopup">
            <p>这是我的图片！</p>
            <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="http://www.runoob.com/wp-content/uploads/2015/10/runoob.jpeg" style="width:800px;height:400px;" alt="Skaret View">
        </div>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>