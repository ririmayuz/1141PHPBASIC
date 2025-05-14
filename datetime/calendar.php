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
            background-color: lightblue;
            color: #aaa;
        }
        .holiday{
            background-color: pink;
            color: white;
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
    <h2><?php date("Y / m") ?></h2>
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
            //畫格子之前先算"這是哪一天?" 
            $day=$j+($i*7)-$firstDayWeek;
            $timestamp = strtotime("$day days",strtotime($firstDay));
            $date = date("Y-m-d",$timestamp);
            //$day=$j+1+($i*7)-$firstDayWeek; 用strtotime就不用+1了
            //strtotime("+1");
            //$d=date("Y-m-$day"); <-這三行是原本的程式碼
            if($today==$date){
                echo "<td class='today'>";
            }else if(date("m",$timestamp) != date("m",strtotime($firstDay))){
                echo "<td class= 'other-month'>";
            }else{
                echo "<td>";
            }
                        
            //if($day>0 && $day<=$theDaysOfMonth){
                echo $date;
            //} 改用strtotime，已經不需要判斷
            // echo $j + 1 + ($i * 7) - $firstDayWeek; <-
            //if的簡寫法:沒有大括號甚至不用else?
            
            echo "</td>";
        }

        echo "</tr>";
    }


    ?>
    </table>
</body>

</html>