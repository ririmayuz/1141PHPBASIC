<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理</title>
    <style>
        h1{
            text-align:center;
            font: size 1.5em;
            color:blue;
            border-bottom:1px solid #ccc;
            padding-bottom:10px;
        }
    </style>
</head>
<body>
    <h1>字串處理</h1>
    <h2>字串取代</h2>
    <p>將”aaddw1123”改成”*********”</p>
<?php
$str="aaddw11232323";
// $str=str_replace("a","*",$str);
// $str=str_replace("d","*",$str);
// $str=str_replace("w","*",$str);
// $str=str_replace("1","*",$str);
// $str=str_replace("2","*",$str);
// $str=str_replace("3","*",$str);
//$str=str_replace("aaddw1123","*********",$str);

//$str=str_replace(["a","d","w","1","2","3"],"*",$str);
//$str=str_replace(str_split($str,2),"*",$str);
$str=str_repeat("*",strlen($str));//英文輸入用strlen就可以/mb_strlen?


echo $str;


?>


</body>
</html>