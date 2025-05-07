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


//把每個元素放給$student這個變數
foreach($students as $name => $score){
    
    echo $name."=";
    echo "<ul style='list-style-type:circle'>";
    foreach($score as $subject => $s){
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



?>



</body>
</html>