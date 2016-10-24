<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>只读列表</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="main" class="ui-content">
        <h2>有序列表：</h2>
        <ol data-role="listview">
            <li>列表项目</li>
            <li>列表项目</li>
            <li>列表项目</li>
        </ol>
        <h2>无序列表：</h2>
        <ul data-role="listview">
            <li>列表项目</li>
            <li>列表项目</li>
            <li>列表项目</li>
        </ul>
    </div>
</div>
</body>
</html>