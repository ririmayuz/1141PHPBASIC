<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理</title>
    <style>
        h1 {
            text-align: center;
            font: size 1.5em;
            color: blue;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>字串處理</h1>
    <h2>字串取代</h2>
    <li>將”aaddw1123”改成”*********”</li>
    <p></p>
    <?php
    $str = "aaddw11232323";
    // $str=str_replace("a","*",$str);
    // $str=str_replace("d","*",$str);
    // $str=str_replace("w","*",$str);
    // $str=str_replace("1","*",$str);
    // $str=str_replace("2","*",$str);
    // $str=str_replace("3","*",$str);
    //$str=str_replace("aaddw1123","*********",$str);

    //$str=str_replace(["a","d","w","1","2","3"],"*",$str);
    //$str=str_replace(str_split($str,2),"*",$str);
    $str = str_repeat("*", strlen($str)); //英文輸入用strlen就可以/mb_strlen?mb=支援多語系


    echo $str;


    ?>

    <h2>字串分割</h2>
    <li>將”this,is,a,book”依”,”切割後成為陣列</li>
    <p></p>

    <?php
    //explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
    //$陣列變數 = explode(分隔符號, 要切的字串, 可選的切割次數);
    $str = "this,is,a,book";
    $str = explode(",", $str);

    echo "<pre>";
    print_r($str);
    echo "</pre>";

    ?>

    <h2>字串組合</h2>
    <li>將上例陣列重新組合成“this is a book”</li>
    <p></p>
    <?php
    //explode & join一模一樣擇一使用
    //經過上個練習，這時候的 $str 已經是一個陣列了
    //join( glue , array )
    //join(string $separator, array $array): string
    $str = join(" ", $str);
    echo $str;

    ?>

    <h2>子字串取用</h2>
    <li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…””</li>
    <p></p>

    <?php
    $str = "The reason why a great man is great is that he resolves to be a great man";
    $str=mb_substr($str,0,10,"utf-8") . "...";
    echo $str;
    
    ?>

    <h2>尋找字串與HTML、css整合應用</h2>
    <ul>
        <li> 給定一個句子，將指定的關鍵字放大</li>
        <li> “學會PHP網頁程式設計，薪水會加倍，工作會好找”F</li>
        <li> 請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>

    <?php

    ?>
</body>

</html>