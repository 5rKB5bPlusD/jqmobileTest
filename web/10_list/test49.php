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
        <h2>我的通讯录</h2>
        <ul data-role="listview" data-autodividers="true" data-inset="true">
            <li><a href="#">Adele</a></li>
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
        <p>data-autodividers="true" 属性通过对列表项文本的首字母进行大写来创建分隔符。</p>
    </div>
</div>
</body>
</html>