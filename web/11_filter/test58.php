<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>过滤div元素中包含的子p元素。</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>过滤所有</h1>
    </div>

    <div data-role="main" class="ui-content">
        <form>
            <input data-type="search" id="divOfPs-input">
        </form>
        <div class="elements" data-filter="true" data-input="#divOfPs-input">
            <p><strong>These</strong> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
            <p><strong>p elements</strong> nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
            <p><strong>are</strong> et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est</p>
            <p><strong>filterable</strong> Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>
        </div>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>