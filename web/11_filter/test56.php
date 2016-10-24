<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>过滤折叠列表</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>过滤折叠列表</h1>
    </div>

    <div data-role="main" class="ui-content">
        <form>
            <input data-type="search" id="filterCollapsibles">
        </form>
        <div data-role="collapsibleset" data-filter="true" data-inset="true" id="myFilter" data-input="#filterCollapsibles">
            <div data-role="collapsible" data-filtertext="Cities">
                <h3>城市</h3>
                <ul data-role="listview" data-inset="false">
                    <li>Copenhagen</li>
                    <li>Mexico City</li>
                    <li>Oslo</li>
                    <li>Paris</li>
                </ul>
            </div>
            <div data-role="collapsible" data-filtertext="Countries">
                <h3>国家</h3>
                <ul data-role="listview" data-inset="false">
                    <li>Denmark</li>
                    <li>France</li>
                    <li>Mexico</li>
                    <li>Norway</li>
                </ul>
            </div>
            <div data-role="collapsible" data-filtertext="Days">
                <h3>周</h3>
                <ul data-role="listview" data-inset="false">
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                </ul>
            </div>
            <div data-role="collapsible" data-filtertext="Months">
                <h3>月</h3>
                <ul data-role="listview" data-inset="false">
                    <li>January</li>
                    <li>February</li>
                    <li>March</li>
                </ul>
            </div>
        </div>
    </div>

    <div data-role="footer">
        <h1>文本底部</h1>
    </div>
</div>
</body>
</html>