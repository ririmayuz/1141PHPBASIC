<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
<h2>建立一個學生成績陣列</h2>
<li>設計一個陣列(一維或多維)來存放學生的成績資料</li>

<?php
// $subject = ['國文','英文','數學','地理','歷史'];
//雖然用一個陣列就代表所有東西但不能用for列出內容
$students = [
    'judy' =>[  '國文' => 95, '英文' => 64, '數學' => 70, '地理' => 90, '歷史' => 84 ],
    'amo'  =>[  '國文' => 88, '英文' => 78, '數學' => 54, '地理' => 81, '歷史' => 71 ],
    'john' =>[  '國文' => 45, '英文' => 60, '數學' => 68, '地理' => 70, '歷史' => 62 ],
    'peter'=>[  '國文' => 59, '英文' => 32, '數學' => 77, '地理' => 54, '歷史' => 42 ],
    'hebe' =>[  '國文' => 71, '英文' => 62, '數學' => 80, '地理' => 62, '歷史' => 64 ],
];

// echo key($students['judy']); //跑看看結果觀察指標，不加['judy']的也嘗試
// for($i=0;$i<count($students);$i++){

// }
//count($test)也就是 5
// $test=[95, 64, 70, 90, 84];
// for($i=0;$i<count($test);$i++){
//     echo $test[$i];
// }

// foreach ($variable as $key => $value) {
//     # code...
// }

//把每個元素放給$student這個變數
foreach($students as $name => $score){//前面先做好一個陣列之後用foreach來拉出值
    
    echo $name."=";
    echo "<ul style='list-style-type:circle'>";
    foreach($score as $subject => $s){//$s=成績
        echo "<li >";
        echo $subject .":";
        echo $s;
        echo "</li>";
    }
    echo "</ul>";
}

$names = array_keys($students);
for($i=0;$i<count($names);$i++){

    $n=$students[$names[$i]];
    $subjects=array_keys($n);

    echo $names[$i];
    echo "的成績<br>";

    $tt=$students[$names[$i]];
    for($j=0;$j<count($tt);$j++){ 
        echo $subjects[$j];
        echo ":";
        echo $tt[$subjects[$j]];
        echo "<br>";
    }
    //print_r($students[$names[$i]]);
//    echo $names[$i];

}

//echo只能印字串,要用serialize轉出
$sss=serialize($students);
echo $sss;
echo "<br>";
$aa=unserialize($sss);
print_r($aa);

echo "<hr>";

$sss=json_encode($students);
echo($sss);
echo "<br>";
$aa=json_decode($sss);
print_r($aa);

?>

<h2>利用程式來產生陣列</h2>
<ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>

<?php
$array = [];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $result = "$i x $j = " . ($i * $j) ;
        $array[]=$result;
    }

}

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// foreach($array as $value){
//     echo $value . "<br>";
// }


//echo $array[30];

//作法二↓ 可以用 key 當作有意義的索引，直接查找特定乘法項目
$array2 = [];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $result = "$i x $j = " . ($i * $j) ;
        $array2[$i . $j]=$result;
    }

}

foreach($array2 as $key => $value){
    echo $key . "=>" . $value . "<br>";
}

echo $array2[44];
//練習:放入字串或中文可不可以
?>

<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<?php
$lotto=[];
for($i=0; $i<6; $i++){
    $num = rand(1,38);
    echo $num . " ";
    //檢查陣列中有沒有重複號碼
    if(!in_array($num,$lotto)){

        $lotto[]=$num;

    }
}
echo "<pre>";
print_r($lotto);
echo "</pre>";


$lotto=[];//再宣告一次=把陣列清空
while(count($lotto)<6){
    $num=rand(1,38);

    if(!in_array($num,$lotto)){
        $lotto[]=$num;
    }
}  

foreach($lotto as $value){
    echo $value . " ";
}
echo "<br>";


$nums=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,
21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];
$lotto=[];

for($i=0;$i<6;$i++){
    //echo count($nums) . ",";
    shuffle($nums);
    $lotto[]=array_pop($nums);
}
echo "<br>";
foreach($lotto as $value){
    echo $value . " ";
}
?>


<h2>找出五百年內的閏年</h2>
<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>
<?php
$year=[];

for($i=2025; $i<=2525; $i++){
    if(($i%4==0 && $i%100 !=0) || ($i  %400 == 0)){
        $year[]=$i;
    }
}

foreach($year as $value){
    echo $value . " , ";
}
echo "<br>";
$theyear=2400;

if(in_array($theyear,$year)){
    echo $theyear . "是閏年";
}else{
    echo $theyear . "不是閏年";
}



$year2=[];
for($i=2025; $i<=2525; $i++){
    if(($i%4==0 && $i%100 !=0) || ($i  %400 == 0)){
        $year2[$i]=true;
    }else{
        $year2[$i]=false;
    }
}
echo "<br>";

$ty=2100;
/* if($year2[$ty]){
    echo $ty . "是閏年";
}else{  
    echo $ty . "不是閏年";
} */

echo $ty . ($year2[$ty]?"是閏年":"不是閏年") . "<br>";
?>

<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，
    輸出對應的天干地支的年別。(利用迴圈)</h2>

<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>

<?php
$e=[ '子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥' ];
$s=[ '甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸' ];
$year=2025;

$d=[];

for($i=0;$i<10;$i++){

    $z=($i%2?1:0);
    for($j=$z;$j<12;$j=$j+2){
        $d[]=$s[$i].$e[$j];
    }
}
echo "<pre>";
print_r($d);
echo "</pre>";

//計算天干地支與西元年對應
$d=[];
$starYear=1984;
for($j=0;$j<500;$j++){

    //$d[]=$s[$j%10].$e[$j%12];
    $d[$starYear+$j]=$s[$j%10].$e[$j%12];

}
// echo "<pre>";
// print_r($d);
// echo "</pre>";

echo 2025 . "年是" . $d[2025] . "<br>";

$d=[];

for($j=0;$j<500;$j++){

    //$d[]=$s[$j%10].$e[$j%12];
    $d[]=$s[$j%10].$e[$j%12];

}
echo "<pre>";
print_r($d);
echo "</pre>";

// echo 1984%60;

//年份的算法
$yy=2126;
echo $d[(2126)%60-4];
?>

<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]

<?php
$a=[2,4,6,1,8];// 建立一個陣列 $a


// 顯示原始陣列
echo "<pre>";
print_r($a);
echo "</pre>";

for($i=0; $i<floor(count($a)/2); $i++){
    
    $temp=$a[$i];// 用變數 $temp 暫存左邊當前位置的值
    $a[$i]=$a[count($a)-1-$i];// 將對應的右邊元素（倒數第 i + 1 個）放到左邊當前位置
    $a[count($a)-1-$i]=$temp;// 再把暫存的左邊原值，放回到對應的右邊位置，完成兩邊交換

    // 舉例來說，第一次迴圈時：
    // $i = 0
    // 左邊是 $a[0] = 2，右邊是 $a[4] = 8
    // 交換後 $a[0] = 8, $a[4] = 2

}
// 顯示反轉後的陣列
echo "<pre>";
print_r($a);
echo "</pre>";

// array_reverse 是 PHP 內建函式，自動回傳反轉的新陣列（不影響原陣列）
echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";


?>
</body>
</html>

