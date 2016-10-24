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
        <h2>列表图标:</h2>
        <ul data-role="listview" data-inset="true">
            <li><a href="#">默认是右箭头</a></li>
            <li data-icon="plus"><a href="#">data-icon="plus"</a></li>
            <li data-icon="minus"><a href="#">data-icon="minus"</a></li>
            <li data-icon="delete"><a href="#">data-icon="delete"</a></li>
            <li data-icon="location"><a href="#">data-icon="location"</a></li>
            <li data-icon="false"><a href="#">data-icon="false"</a></li>
        </ul>
    </div>
</div>
</body>
</html>