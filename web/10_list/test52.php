<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>带16*16图标的列表内容</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="main" class="ui-content">
        <h2>列表图标:</h2>
        <ul data-role="listview" data-inset="true">
            <li><a href="#"><img src="us.png" alt="USA" class="ui-li-icon">USA</a></li>
            <li><a href="#"><img src="gb.png" alt="Great Britain" class="ui-li-icon">Great Britain</a></li>
            <li><a href="#"><img src="finland.png" alt="Finland" class="ui-li-icon">Finland</a></li>
            <li><a href="#"><img src="germany.png" alt="Germany" class="ui-li-icon">Germany</a></li>
            <li><a href="#"><img src="france.png" alt="France" class="ui-li-icon">France</a></li>
        </ul>
    </div>
</div>
</body>
</html>