<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>列表分割</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="main" class="ui-content">
        <h2>List Dividers</h2>
        <ul data-role="listview">
            <li data-role="list-divider">欧洲</li>
            <li><a href="#">德国</a></li>
            <li><a href="#">英国</a></li>
            <li data-role="list-divider">亚洲</li>
            <li><a href="#">中国</a></li>
            <li><a href="#">印度</a></li>
            <li data-role="list-divider">非洲</li>
            <li><a href="#">埃及</a></li>
            <li><a href="#">南非</a></li>
        </ul>
    </div>
</div>
</body>
</html>