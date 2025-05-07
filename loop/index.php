<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈</title>
</head>
<body>
<h2>使用for迴圈來產生以下的數列</h2>

<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>

<?php
for($i=1; $i<30; $i=$i+2){
    echo $i . ",";
}
echo "<br>"; 

for($i=1; $i<10; $i=$i+1){
    echo $i*10 . ",";
}
echo "<br>";
for($i=10; $i<100; $i=$i+10){
    echo $i . ",";
}

echo "<br>";

for($j=3; $j<=100; $j=$j+2){
    $test = true;
    $count = 0;
    for($i=2; $i<$j; $i=$i+1){
        $count++;
        if($j % $i == 0){
            $test = false;
            break;
        }
    }

    if($test){
        echo $j . ",";
    }
    // echo"-";
    // echo"迴圈跑了" .$count. "次";    
    
}
?>

<h2>九九乘法表</h2>

<table border=1>
    
        <?php
        for($j=1; $j<=9; $j++){

            echo "<tr>";

            for($i=1; $i<=9; $i++){
                echo "<td>$i x$j = ". ($j * $i) . "</td>";
                //echo "<td>". ($i * $j). ($j * $i) ."</td>";
            }

            echo "</tr>";
        }
        ?>
    
</table>

<!-- <table>
    <tr>
        <td>1 x 1 = 1</td>
        <td>1 x 2 = 2</td>
        <td>1 x 3 = 3</td>
        <td>1 x 4 = 4</td>
        <td>1 x 5 = 5</td>
        <td>1 x 6 = 6</td>
        <td>1 x 7 = 7</td>
        <td>1 x 8 = 8</td>
        <td>1 x 9 = 9</td>
    </tr>
</table> -->

<h2>以交叉計算結果呈現的九九乘法表</h2>
 <style>
    #tt{
        border-collapse:collapse;
        margin: 20px;
        box-shadow:2px 2px 15px blue;
    }
    #tt td{
        padding: 3px 6px;
        border: 1px solid #CCC;
        text-align: center;
        width: 25px;
        text-shadow:1px 1px 2px #99f; 
    }
    #tt tr:nth-child(1),
    #tt td:nth-child(1){
        background-color: #999;
        color: white;
    }
    #tt td:hover{
        background-color:yellow;
        color:skyblue;
    }
 </style>       
<table id='tt'>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
        for($j=1; $j<=9; $j++){//負責橫列的動作

            echo "<tr>";
                echo "<td>$j</td>";

            for($i=1; $i<=9; $i++){//負責格子
                
                echo "<td> ". ($j * $i) . "</td>";
                //課堂練習:票價表
                //整個右上半部不顯示
                //每一格都要判斷這一格要不要顯示
            }

            echo "</tr>";
        }
        ?>
    
</table>

<h2>斜角九九乘法表</h2>
 <style>
    #tt{
        border-collapse:collapse;
        margin: 20px;
        box-shadow:2px 2px 15px blue;
    }
    #tt td{
        padding: 3px 6px;
        border: 1px solid #CCC;
        text-align: center;
        width: 25px;
        text-shadow:1px 1px 2px #99f; 
    }
    #tt tr:nth-child(1),
    #tt td:nth-child(1){
        background-color: #999;
        color: white;
    }
    #tt td:hover{
        background-color:yellow;
        color:skyblue;
    }
 </style>       
<table id='tt'>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
        for($j=1; $j<=9; $j++){//負責橫列的動作

            echo "<tr>";
                echo "<td>$j</td>";

            for($i=1; $i<=9; $i++){//負責格子
                if($i<=$j){
                    echo "<td> ". ($j * $i) . "</td>";
                }

                //課堂練習:票價表
                //整個右上半部不顯示
                //每一格都要判斷這一格要不要顯示
            }

            echo "</tr>";
        }
        ?>
    
</table>

<h2>斜角九九乘法表-反向</h2>
 <style>
    #tt{
        border-collapse:collapse;
        margin: 20px;
        box-shadow:2px 2px 15px blue;
    }
    #tt td{
        padding: 3px 6px;
        border: 1px solid #CCC;
        text-align: center;
        width: 25px;
        text-shadow:1px 1px 2px #99f; 
    }
    #tt tr:nth-child(1),
    #tt td:nth-child(1){
        background-color: #999;
        color: white;
    }
    #tt td:hover{
        background-color:yellow;
        color:skyblue;
    }
 </style>       
<table id='tt'>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
        for($j=1; $j<=9; $j++){//負責橫列的動作

            echo "<tr>";
                echo "<td>$j</td>";

            for($i=1; $i<=9; $i++){//負責格子
                if($i>=$j){ //!!!注意這行!!!
                    echo "<td> ". ($j * $i) . "</td>";
                }

                //課堂練習:票價表
                //整個右上半部不顯示
                //每一格都要判斷這一格要不要顯示
            }

            echo "</tr>";
        }
        ?>
    
</table>

