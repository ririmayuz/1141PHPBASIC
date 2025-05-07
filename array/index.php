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

foreach($array as $value){
    echo $value . "<br>";
}


//echo $array[30];
?>

</body>
</html>