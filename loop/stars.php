<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈畫星星</title>
</head>
<body>
<h2>以 * 符號為基礎在網頁上排列出下列圖形:</h2>
<ul>
    <li>直角三角型</li>
    <li>倒直角三角型</li>
    <li>正三角型</li>
    <li>菱型</li>
    <li>矩形</li>
    <li>內含對角線的矩形</li>
</ul>

<h3>三角形</h3>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i>=$j){
            echo "★";
        }
    }
    echo "<br>";
}
?>

<h3>倒三角形</h3>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i<=$j){
            echo "★";
        }
    }
    echo "<br>";
}
?>

<h3>倒三角形 - 寫法 2</h3>
<?php
for($i=4;$i>=0;$i--){
    for($j=0;$j<5;$j++){
        if($i>=$j){
            echo "★";
        }
    }
    echo "<br>";
}
?>

<h3>正三角形</h3>
<style>
     *{
        font-family:'Courier New', Courier , monospace;
     }
     /* 所有的標籤 */
     /* 解決字型問題無法印出漂亮的三角形 */
</style>
<?php
for($i=0;$i<5;$i++){

   //星星前要印空白把三角形推出來
    for($k=0;$k<5-1-$i;$k++){
        //空白的最大值是5-1再扣外圈的i值
        //(4是自己設定的數字、但邏輯上是5-1)
        echo "&nbsp;"; 
    }
    for($j=0; $j<$i * 2+1; $j++){
        echo "*";
    } 
    echo "<br>";
}

?>

<h3>變數控制的三角形</h3>

<?php
$stars=8;
for($i=0;$i<$stars;$i++){

   //星星前要印空白把三角形推出來
    for($k=0;$k<$stars-1-$i;$k++){//空白最大值5-1再扣外圈的i值
        echo "&nbsp;"; 
    }
    for($j=0; $j<$i * 2+1; $j++){
        echo "*";
    } 
    echo "<br>";
}

?>

<h3>菱形</h3>
<?php
$stars=12; 
// 完善程式:如果可以讓人輸入任意數字，要考慮呈現時的問題
// 但實際上只有奇數跑出來才正常

if($stars%2==0){//解法:強制限制只能是奇數
    $stars=$stars+1;
}

for($i=0;$i<$stars;$i++){

    if($i<=floor($stars/2)){
        $y=$i;

    }else{
        $y=$stars-1-$i;
    }

    //畫空白
    for($j=0;$j<floor($stars/2)-$y;$j++){
        echo "&nbsp";
    }
    //畫星星
    for($k=0;$k<$y*2+1;$k++){
        echo "*";
    }
    echo "<br>";
}
?>

<h3>矩形</h3>
<?php
$w=5;//寬度/或是星數
for($i=0;$i<$w;$i++){//i=0或<寬度的時候做

    for($j=0;$j<$w;$j++){

        if($i==0 || $i==$w-1 || $j==0 || $j==$w-1){//滿足其中一個條件就印星星

            echo "*";
            
        }else{//述4個條件都沒有的情況印空白

            echo "&nbsp";
        }

    }
    echo "<br>";
}

?>


</body>
</html>