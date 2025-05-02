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

    //畫外圍的空白
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

<h3>對角線矩形</h3>
<?php
$w=11;//寬度/或是星數
for($i=0;$i<$w;$i++){//i=0或<寬度的時候做

    for($j=0;$j<$w;$j++){

        if($i==0 || $i==$w-1 || $j==0 || $j==$w-1 || $i==$j || $i==$w-1-$j){//滿足其中一個條件就印星星

            echo "*";

        }else{//述4個條件都沒有的情況印空白

            echo "&nbsp";
        }

    }
    echo "<br>";
}
?>

<h3>對角線菱形</h3>

<?php
$stars=21; 

if($stars%2==0){
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
    //注意迴圈的特性
    // j=3的時候會跑一次=4，超過4才不會再做，這時候的值是4
    // echo "&nbsp";

    //畫星星
    for($k=0;$k<$y*2+1;$k++){
        if(($y+$k+$j)==floor($stars/2) ||
            abs($y-($k+$j))==floor($stars/2) ||
            ($k+$j)==floor($stars/2) ||
            $i==floor($stars/2)){//確保k值是正確的
            echo "*";     
            //到這裡得到了空心的菱形    
            //($stars/2)就是4，寫成($stars/2)才不會寫死、可以自行改數值
        }else{
            echo "&nbsp";
            //k+j是4的時候把空白畫出來 以及
            //i=floor(i/2)
        }
    }
    echo "<br>";
}
?>


<h3>菱形對角線(老師的版本)</h3>

<?php
$stars = 21; // 設定整個菱形的寬度（也是高度）

// 如果是偶數，我們加 1 變成奇數，這樣才有正中間
if ($stars % 2 == 0) {
    $stars = $stars + 1;
}

// 開始畫每一列
for ($i = 0; $i < $stars; $i++) {

    // 決定這一列的「星星層數」
    // 前半段正序（上半部），後半段反序（下半部）
    if ($i <= floor($stars / 2)) {
        $y = $i;
    } else {
        $y = $stars - 1 - $i;
    }

    // 印出前面空格，讓圖形置中
    for ($j = 0; $j < floor($stars / 2) - $y; $j++) {
        echo "&nbsp;"; // 每次印一個空格
    }

    // 印出這一列的星星或空格
    for ($k = 0; $k < $y * 2 + 1; $k++) {
        // 這段是「印哪裡要有星星」
        // 條件解釋如下：
        if (
            ($y + $k + $j) == floor($stars / 2) ||           // 左上到右下斜線
            abs($y - ($k + $j)) == floor($stars / 2) ||      // 右上到左下斜線
            ($k + $j) == floor($stars / 2) ||                // 中間垂直線
            $i == floor($stars / 2)                          // 中間水平線
        ) {
            echo "*"; // 如果符合上述其中一條，印星星
        } else {
            echo "&nbsp;"; // 否則印空格
        }
    }

    // 每列結尾換行
    echo "<br>";
}
?>

<h3>尋找字元</h3>
<?php
$string="This is a good day";
$target="a";//可以改成z看看沒找到的結果
$is_find=0; //預設沒找到.0=true.1=false
$counter=0;//計數器
echo strlen($string);
while($is_find==0 && $counter<strlen($string)){//括號裡面是可以讓我繼續進行的條件


    if($string[$counter] == $target){
        $is_find=1;

    }
    echo $counter;
    echo $is_find;
    $counter++;
    echo ",";
    echo $counter;//表示第幾次找
    echo "<br>";
}

if($is_find){//括號裡面等同is_find == true，變數裡面本身是帶值的
    echo "目標字元". $target . "在字串的第" . $counter . "個位置";
}else{
    echo "字串中沒有你要找的" . $target;
}
?>


<h3>尋找字元中文字</h3>
<?php
$string="今天真是個出遊的好日子啊~";
$target="個";//可以改成z看看沒找到的結果
$is_find=0; //預設沒找到.0=true.1=false
$counter=0;//計數器
echo $string;
echo "<br>";
echo $target;
echo "<br>";
while($is_find==0 && $counter<mb_strlen($string)){//括號裡面是可以讓我繼續進行的條件
    //echo mb_substr($string,$counter,1);
    //echo "-";

    if(mb_substr($string,$counter,1) == $target){
        $is_find=1;

    }
    //echo $counter;
    //echo $is_find;
    $counter++;
    //echo ",";
    //echo $counter;//表示第幾次找
    //echo "<br>";
}

if($is_find){//括號裡面等同is_find == true，變數裡面本身是帶值的
    echo "目標字元". $target . "在字串的第" . $counter . "個位置";
}else{
    echo "字串中沒有你要找的" . $target;
}
?>


<h3>尋找字元中文詞</h3>
<?php
$string="今天真是個出遊的好日子啊~";
// $string="This is a good day";
$target="出遊";
$is_find=0; 
$counter=0;
echo $string;
echo "<br>";
echo $target;
echo "<br>";
while($is_find==0 && $counter<mb_strlen($string)){
    echo mb_substr($string,$counter,mb_strlen($target));
    //echo "-";

    if(mb_substr($string,$counter,mb_strlen($target)) == $target){
        $is_find=1;

    }
    //echo $counter;
    //echo $is_find;
    $counter++;
    //echo ",";
    //echo $counter;//表示第幾次找
    echo "<br>";
}

if($is_find){//括號裡面等同is_find == true，變數裡面本身是帶值的
    echo "目標字元". $target . "在字串的第" . $counter . "個位置";
}else{
    echo "字串中沒有你要找的" . $target;
}
?>
<hr>
<?php
echo mb_strpos($string,$target);
//告訴你你要找的字的目標在第幾個位置，但位置是從0開始算
?>
</body>
</html>