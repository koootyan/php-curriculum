<?php
    // あいさつを３つ用意
    $greet_morning = "おはよう";
    $greet_afternoon = "こんにちは";
    $greet_evening = "こんばんは";
    // 時間を取得し整数に変換
    $now_time = intval(date("H", time()));
    echo "今".$now_time."時台です";
    echo "<br>";
    // 時間帯によって表示されるあいさつを変えるß
    if ($now_time >= 5 && $now_time <= 10) {
        echo $greet_morning;
    } else if ($now_time > 10 && $now_time <= 18) {
        echo $greet_afternoon;
    } else if ($now_time > 18 || $now_time < 5) {
        echo $greet_evening;
    }
?>