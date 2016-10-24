<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>可过滤列表</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="main" class="ui-content">
        <h2>我的通讯录</h2>
        <form class="ui-filterable">
            <input id="myFilter" data-type="search">
        </form>
        <ul data-role="listview" data-filter="true" data-input="#myFilter" data-autodividers="true" data-inset="true">
            <li data-filtertext="fav"><a href="#">Adele</a></li><!--data-filtertext="fav"设置自定义过滤-->
            <li><a href="#">Agnes</a></li>
            <li><a href="#">Albert</a></li>
            <li><a href="#">Billy</a></li>
            <li><a href="#">Bob</a></li>
            <li><a href="#">Calvin</a></li>
            <li><a href="#">Cameron</a></li>
            <li><a href="#">Chloe</a></li>
            <li><a href="#">Christina</a></li>
            <li><a href="#">Diana</a></li>
            <li><a href="#">Gabriel</a></li>
            <li><a href="#">Glen</a></li>
            <li><a href="#">Ralph</a></li>
            <li><a href="#">Valarie</a></li>
        </ul>
    </div>
</div>
</body>
</html>