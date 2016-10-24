<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>回流表格</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>回流表格</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>回流模型表格在屏幕尺寸足够大时是水平显示，而在屏幕尺寸达到足够小时，所有的数据会变成垂直显示。</p>

        <p>重置窗口大小查看效果：</p>
        <table data-role="table" class="ui-responsive">
            <thead>
            <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Obere Str. 57</td>
                <td>Berlin</td>
                <td>12209</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Antonio Moreno Taquer</td>
                <td>Antonio Moreno</td>
                <td>Mataderos 2312</td>
                <td>Mico D.F.</td>
                <td>05023</td>
                <td>Mexico</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Around the Horn</td>
                <td>Thomas Hardy</td>
                <td>120 Hanover Sq.</td>
                <td>London</td>
                <td>WA1 1DP</td>
                <td>UK</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Berglunds snabbk</td>
                <td>Christina Berglund</td>
                <td>Berguvsven 8</td>
                <td>Lule</td>
                <td>S-958 22</td>
                <td>Sweden</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div data-role="footer">
        <h1>底部文本</h1>
    </div>
</div>
</body>
</html>