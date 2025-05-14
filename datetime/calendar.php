<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        h1 {
            text-align: center;
            color: blue;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin: 0 auto;
            /* block模式中，在有寬度限制的情況下執行這行才有效果 */
        }

        td {
            border: 1px solid black;
            text-align: center;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <h1>線上日曆</h1>

    <?php
    $today = date("Y-m-d");
    $firstDay = date("Y-m-01"); //文字模板  
    $firstDayWeek = date("w", strtotime($firstDay)); // w/在這一週的哪一天


    ?>

    <table>
        <tr>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
            <td>日</td>
        </tr>
    </table>

    <?php
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";

        for ($j = 0; $j < 7; $j++) {
            echo "<td>";
            echo $j + 1 + ($i * 7) - $firstDayWeek;
            echo "</td>";
        }

        echo "</tr>";
    }


    ?>
</body>

</html>