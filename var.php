<?php
// 常數宣告
define("PI",3.14159);

$age = 10;
$name = "江雅茹";
$ename = "Yuz";
// 沒有"" = 常數
// 字串跟字串連接 .
//'單引號'、純文字，"雙引號"變數
echo '我的年齡是:' . $age . '歲';
echo "<br>";
echo "我的名字是:" . $name;
echo "<br>";
echo PI;

echo "<hr>";

$age = 20;
$name = "123";
echo '我的年齡是:' . $age . '歲';
echo "<br>";
echo "我的名字是:" . $name;
echo "<br>";
echo PI;//不能被改變
