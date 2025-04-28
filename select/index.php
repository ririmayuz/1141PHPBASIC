<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇結構</title>
</head>
<body>
<h2>判斷成績</h2> 
<p>給定一個成績數字，判斷是否及格60分</p>
<p>
    1. 不及格使用紅色顯示，及格使用綠色字顯示
</p>
<p>
    2. 判斷$score是否是數字，如果不是數字，則顯示錯誤
</p>

<?php
$score = "!50";

if(!is_numeric($score) || $score<0 || $score>100){
    echo "錯誤:請輸入合法的成績數字";
    exit();
}

echo "你的成績是:" .$score."分";
echo "<br>";
echo "判定結果:";
if($score>=60){
    echo "<span style='color: green;'>及格</span>";
}else{
    echo "<span style='color: red;'>不及格</span>";
}

echo "<hr>";


$score = 50;
if($score>=0)

echo "<hr>";



?>
</body>
</html>



