<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>简单列表</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="main" class="ui-content">
        <h2>有序列表：</h2>
        <ol data-role="listview" data-inset="true"><!--data-inset设置圆角有边距-->
            <li><a href="#">列表项</a></li>
            <li><a href="#">列表项</a></li>
            <li><a href="#">列表项</a></li>
        </ol>
        <h2>无序列表：</h2>
        <ul data-role="listview" data-inset="true">
            <li><a href="#">列表项</a></li>
            <li><a href="#">列表项</a></li>
            <li><a href="#">列表项</a></li>
        </ul>
    </div>
</div>
</body>
</html>