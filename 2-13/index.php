<!-- ceil（切り上げ） -->
<?php
    $x = 4.8;
    echo ceil($x)."<br>";
?>

<!-- floor（切り捨て） -->
<?php
    $x = 4.8;
    echo floor($x)."<br>";
?>

<!-- round（四捨五入） -->
<?php
    $x = 4.8;
    echo round($x)."<br>";
?>

<!-- pi（円周率） -->
<?php
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area;
    }
    circleArea(3);
?>

<?php echo "<br>" ?>

<!-- mt_rand（乱数） -->
<?php
    echo mt_rand(1, 50)."<br>";
?>

<!-- strlen（文字列の長さ） -->
<?php
    $str = "arm";
    echo strlen($str)."<br>";
?>

<!-- strpos（検索） -->
<?php
    $str = "arm";
    echo strpos($str, "r")."<br>";
?>

<!-- substr（文字列の切り取り） -->
<?php
    $str = "kaguyahime";
    echo substr($str, -6, 6)."<br>";
?>

<!-- str_replace（置換） -->
<?php
    $str = "kaguyahime";
    echo str_replace("kaguya", "oto", $str)."<br>";
?>

<!-- printf（フォーマット化した文字列を出力） -->
<?php
    $event = "運動会";
    $month = 6;
    $day = 2;
    printf("%sは%02d月%02d日に開催されます", $event, $month, $day);
?>

<?php echo "<br>" ?>

<!-- sprintf（変数に代入できるprintf） -->
<?php
    $event = "運動会";
    $month = 8;
    $day = 4;
    $report = sprintf("%sは%02d月%02d日に開催されます", $event, $month, $day);
    echo $report;
?>