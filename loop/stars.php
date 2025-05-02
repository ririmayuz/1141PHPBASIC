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

<h3>倒三角形 - 寫法2</h3>
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


</body>
</html>