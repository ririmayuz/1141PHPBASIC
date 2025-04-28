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

</body>
</html>