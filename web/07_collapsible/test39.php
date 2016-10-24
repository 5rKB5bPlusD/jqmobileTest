<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head; ?>
    <meta charset="UTF-8">
    <title>去掉圆角和外边距</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>可折叠的 data-inset</h1>
    </div>

    <div data-role="main" class="ui-content">
        <h2>带有圆角的可折叠内容块:</h2>
        <div data-role="collapsible">
            <h1>这是有圆角的可折叠内容块。</h1>
            <p>默认地，可折叠块带有包含外边距的圆角，使用 data-inset="false" 可去掉外边距与圆角。</p>
        </div>

        <h2>没有圆角的可折叠内容块：</h2>
        <div data-role="collapsible" data-inset="false">
            <h1>这是没有圆角的可折叠内容块。</h1>
            <p>默认地，可折叠块带有包含外边距的圆角，使用 data-inset="false" 可去掉外边距与圆角。</p>
        </div>
        <br>

        <h2>没有圆角的可折叠集合:</h2>
        <div data-role="collapsibleset">
            <div data-role="collapsible" data-inset="false">
                <h3>点击我 - 我可以折叠！</h3>
                <p>我是可折叠的内容。</p>
            </div>
            <div data-role="collapsible" data-inset="false">
                <h3>点击我 - 我可以折叠！</h3>
                <p>我是可折叠的内容。</p>
            </div>
            <div data-role="collapsible" data-inset="false">
                <h3>点击我 - 我可以折叠！</h3>
                <p>我是可折叠的内容。</p>
            </div>
            <div data-role="collapsible" data-inset="false">
                <h3>点击我 - 我可以折叠！</h3>
                <p>我是可折叠的内容。</p>
            </div>
        </div>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>