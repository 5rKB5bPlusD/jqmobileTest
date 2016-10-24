<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>show</title>
    <style>
        .white{
            background:white;
            color:black;
        }
        .black{
            background: black;
            color: gray
        }
        .green{
            background: green;
            color: black;
        }
    </style>
</head>
<body>
<div data-role="page" id="show">
    <div data-role="header" data-position="fixed" data-fullscreen="true">
        <a href="#" class="ui-btn ui-icon-back ui-btn-icon-left" data-rel="back">返回</a>
        <h1>books</h1>
        <a href="#" class="ui-btn ui-icon-bars ui-btn-icon-left ui-btn-right">详情</a>
    </div>
    <div data-role="main" class="ui-content">
        <div id="main">
            <?php include 'fopen.php'; my_fopen("test.txt")?>
        </div>
    </div>
    <div data-role="footer" data-position="fixed" data-fullscreen="true">
        <a class="ui-btn ui-icon-eye ui-btn-corner-all ui-btn-icon-notext ui-btn-inline"></a>
        <button id="a" data-theme="a"></button>
        <button id="b" data-theme="b"></button>
        <button id="c" data-theme="c"></button>
        <button id="d" data-theme="d"></button>
        <button id="e" data-theme="e"></button>
    </div>
</div>
</body>
<script>
    $("#a").click(function () {
        $("#main").removeClass().addClass("white");
    });
    $("#b").click(function () {
        $("#main").removeClass().addClass("black");
    });
    $("#c").click(function () {
        $("#main").removeClass().addClass("green");
    });
</script>
</html>