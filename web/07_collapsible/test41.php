<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>图标更改</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>可折叠块</h1>
    </div>

    <div data-role="main" class="ui-content">
        <div data-role="collapsible" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u">
            <h1>data-collapsed-icon 规定按钮的图标。</h1>
            <p>data-expanded-icon 规定内容被展开时按钮的图标。</p>
        </div>
    </div>

    <div data-role="footer">
        <h1>页脚</h1>
    </div>
</div>
</body>
</html>