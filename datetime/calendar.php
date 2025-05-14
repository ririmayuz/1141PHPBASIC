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

        .today{
            background-color: lightblue;
            font-weight: bold;
        }

        .other-month{
            background-color: gray;
            color: #aaa;
        }

        .holiday{
            background-color: pink;
            color: white;
        }

        tr:not(tr:nth-child(1)) td:hover{
            background-color:lightblue;
            cursor:pointer;
            font-size:16px;
            font-weight:bold;
        }
        .pass-date{
            /* background-color:lightgray; */
            color:#aaa;
        }
    </style>
</head>

<body>
    <h1>線上日曆</h1>

    <?php
    $today = date("Y-m-d");
    $firstDay = date("Y-m-01"); //文字模板  
    $firstDayWeek = date("w", strtotime($firstDay)); // w = 在這一週的哪一天
    $theDaysOfMonth = date("t", strtotime($firstDay));
    //變數用駝峰式命名法:小駝峰 theDaysOfMonth/大駝峰 TheDaysOfMonth
    //蛇型/鍊式命名法 the_days_of_month / the-days-of-month
    ?>
    <h2 style='text-align:center;'><?=date("Y 年 m 月"); ?></h2>
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
    

<?php
for ($i = 0; $i < 6; $i++) {
    echo "<tr>";

    for ($j = 0; $j < 7; $j++) {
        // === 計算當前格子的日期 ===
        // 原寫法是直接算日數：$j + 1 + ($i * 7) - $firstDayWeek
        // 改用 strtotime 處理跨月更準確，不用額外判斷
        $day = $j + ($i * 7) - $firstDayWeek;
        $timestamp = strtotime("$day days", strtotime($firstDay));
        $date = date("Y-m-d", $timestamp);
        $class = ""; // 初始化格子 class

        // === 加入對應的 class ===

        // 週末（六、日）
        if (date("N", $timestamp) > 5) {
            $class .= " holiday";
        }

        // 今日
        if ($today == $date) {
            $class .= " today";

        // 非本月日期
        } else if (date("m", $timestamp) != date("m", strtotime($firstDay))) {
            $class .= " other-month";
        }

        // 已過的日期（今天之前）
        if ($timestamp < strtotime($today)) {
            $class .= " pass-date";
        }

        // === 輸出表格格子（只顯示日） ===
        echo "<td class='$class' data-date='$date'>";
        echo date("d", $timestamp); 
        echo "</td>";
    }

    echo "</tr>";
}
?>

    </table>
</body>

</html>