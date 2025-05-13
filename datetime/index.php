<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期/時間</title>
</head>

<body>
    <h1>日期/時間</h1>
    <h2>基本函式使用</h2>

    <?php
    // header("Refresh: 1"); // 每 1 秒刷新一次


    date_default_timezone_set("Asia/Taipei"); //設定時區
    echo "台北：";
    echo date("Y-m-d H:i:s"); //取得當前的日期和時間
    echo "<br>";

    echo "東京：";
    date_default_timezone_set("Asia/Tokyo"); //設定時區
    echo date("Y-m-d H:i:s"); //取得當前的日期和時間
    echo "<br>";

    echo "曼谷：";
    date_default_timezone_set("Asia/Bangkok"); //設定時區
    echo date("Y-m-d H:i:s"); //取得當前的日期和時間
    echo "<br>";

    echo "紐約：";
    date_default_timezone_set("America/New_York"); //設定時區
    echo date("Y-m-d H:i:s"); //取得當前的日期和時間

    ?>

    <h2>時間戳記</h2>
    <?php

    $timestamp = time(); // 取得當前的時間戳記
    echo "當前的時間戳記：$timestamp<br>";


    $dateString = "2023-10-01 12:00:00";
    echo "日期字串：" . $dateString . "<br>";
    $timestampFromString = strtotime($dateString); // 將字串轉換為時間戳記
    echo "字串轉換為時間戳記：$timestampFromString<br>";


    $dateFromTimestamp = date("Y-m-d H:i:s", $timestamp); // 將時間戳記轉換為日期字串
    echo "時間戳記轉換為日期字串：$dateFromTimestamp<br>";
    ?>

    <h2>給定兩個日期，計算中間間隔天數</h2>
    <?php
    $date1 = "2025-5-01"; // 設定第一個日期
    $date2 = "2025-5-21"; // 設定第二個日期
    echo "日期1：$date1<br>";
    echo "日期2：$date2<br>";

    $date1_timestamp = strtotime($date1); // 將日期字串轉換為時間戳記
    $date2_timestamp = strtotime($date2); // 將日期字串轉換為時間戳記
    $diff = $date2_timestamp - $date1_timestamp; // 計算兩個時間戳記的差值
    $days = ($diff / (60 * 60 * 24)); // 將差值轉換為天數
    echo "兩個日期相差 $days 天<br>"; // 輸出結果

    ?>
    <h2>strtotime的用法</h2>
    <?php

    // strtotime() 函式可以將日期字串轉換為時間戳記
    $dateString1 = "2023-10-01 12:00:00"; // 設定日期字串
    $timestamp1 = strtotime($dateString1); // 將字串轉換為時間戳記
    echo "日期字串：$dateString1<br>";
    echo "時間戳記：$timestamp1<br>";

    // strtotime() 函式也可以處理相對時間
    $relativeDateStrings = [
        "+1 days",
        "-1 days",
        "+1 weeks",
        "-1 weeks",
        "+1 month",
        "-1 month",
        "+1 year",
        "-1 year",
        "next Monday",
        "last Friday",
        "first day of next month",
        "last day of this month"
    ];

    foreach ($relativeDateStrings as $relativeDateString) {
        //strtotime("+1 days",$timestamp); // 將相對時間字串轉換為時間戳記
        $timestamp = strtotime($relativeDateString);
        echo "相對時間字串：$relativeDateString<br>";
        echo "相對時間的時間戳記：$timestamp<br>";
        echo "相對時間的日期：" . date("Y-m-d H:i:s", $timestamp) . "<br><br>";
    }
    $relativeDateString = "+2 days"; // 設定相對時間字串
    $timestamp2 = strtotime($relativeDateString); // 將相對時間字串轉換為時間戳記
    echo "相對時間字串：$relativeDateString<br>";
    echo "相對時間的時間戳記：$timestamp2<br>";

    $date = "2025-5-01"; // 設定日期字串
    $timestamp3 = strtotime("+15 day", strtotime($date)); // 將日期字串轉換為時間戳記$date); // 將日期字串轉換為時間戳記
    echo "日期字串：$date<br>";
    echo "15天後的日期：" . date("Y-m-d H:i:s", $timestamp3) . "<br><br>";

    ?>

    <h2>計算距離自己下一次生日還有幾天</h2>
    <?php
    //設定生日
    $birthday = "1993-06-07";
    $birthday_array = explode("-", $birthday); //將生日字串轉成陣列
    $birthday_array[0] = date("Y"); //將升四的年份改為當前年分

    $nextBirthday = join("-", $birthday_array); //將陣列轉為字串

    //接著要算生日過了沒
    // $today = strtotime("now");
    $today = strtotime(date("Y-m-d")); //取得當前的時間戳記
    $birthday_timestamp = strtotime($nextBirthday); //生日字串轉時間戳記
    //echo "生日的時間戳記：$birthday_timestamp<br>";


    if ($today > $birthday_timestamp) {
        //還沒過就把生日的時間戳再+1年再轉成生日的時間，確保生日的時間戳永遠都是之後的時間，比今天還要大
        $birthday_timestamp = strtotime("+1 year", $birthday_timestamp);
    }
    $birthday_diff = $birthday_timestamp - $today; //計算兩個時間戳記的差值
    $days = ($birthday_diff / (60 * 60 * 24)); //把差值轉成天數

    echo "我的出生日是: $birthday <br>";
    echo "距離自己下一個生日還有 $days 天";

    ?>


    <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
    <ul>
        <li>2021/10/05</li>
        <li>10月5日 Tuesday</li>
        <li>2021-10-5 12:9:5</li>
        <li>2021-10-5 12:09:05</li>
        <li>今天是西元2021年10月5日 上班日(或假日)</li>
    </ul>
     <?php

    ?>

    <h2>利用迴圈來計算連續五個周一的日期</h2>
    <ol>
        <li>2021-10-04 星期一</li>
        <li>2021-10-11 星期一</li>
        <li>2021-10-18 星期一</li>
        <li>2021-10-25 星期一</li>
        <li>2021-11-01 星期一</li>
    </ol>

    <?php
    $mon = "2025-05-12" ;
    for($i=0;$i<5;$i++){
        $temp = strtotime("+$i week",strtotime($mon));
        echo date("Y-m-d l", $temp) . "<br>";
    }

    ?>
    
    
</body>

</html>