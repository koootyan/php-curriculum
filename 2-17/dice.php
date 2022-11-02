<?php
    // 最初のマスの位置とゴールのマスの位置
    $start_number = 0;
    $goal_number = 40;
    // サイコロを振る回数
    $count = 1;
    // ゴールに着くまでwhile文でループさせ、サイコロを振るたびにcountを増やしていく
    // また、サイコロで出た目をstart_numberに加算していく
    while ($start_number <= $goal_number) { 
        $roll_number = mt_rand(1, 6);
        echo $count."回目=".$roll_number;
        echo "<br>";
        $start_number += $roll_number;
        // start_numberがゴールマスの数以上になった時点でループ処理を止め、ゴールした旨の文章を表示させる
        if ($start_number >= $goal_number) {
            echo "合計".$count."回でゴールしました";
            break;
        }
        $count++;
    }
?>