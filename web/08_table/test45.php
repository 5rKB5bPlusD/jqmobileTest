<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>添加样式</title>
</head>
<style>
    th {
        border-bottom: 1px solid #d6d6d6;
    }

    tr:nth-child(even) {
        background: #e9e9e9;
    }
</style>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>切换表格样式</h1>
    </div>

    <div data-role="main" class="ui-content">
        <table data-role="table" data-mode="columntoggle" class="ui-responsive ui-shadow" id="myTable">
            <thead>
            <tr>
                <th data-priority="6">CustomerID</th>
                <th>CustomerName</th>
                <th data-priority="1">ContactName</th>
                <th data-priority="2">Address</th>
                <th data-priority="3">City</th>
                <th data-priority="4">PostalCode</th>
                <th data-priority="5">Country</th>
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