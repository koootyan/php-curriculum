<?php
    $fruits = ["ringo", "banana", "budou", "kiui"];
    echo count($fruits);
?>

<?php echo "<br>" ?>

<?php
    $fruits = ["ringo", "banana", "budou", "kiui"];
    sort($fruits);
    var_dump($fruits);
?>

<?php echo "<br>" ?>

<?php
    $fruits = ["ringo", "banana", "budou", "kiui"];
    if (in_array("banana", $fruits)) {
        echo "バナナがある";
    } else {
        echo "バナナはない";
    }
?>

<?php echo "<br>" ?>

<?php
    $fruits = ["ringo", "banana", "budou", "kiui"];
    $atstr = implode("@", $fruits);
    var_dump($atstr);
?>

<?php echo "<br>" ?>

<?php
    $fruits = ["ringo", "banana", "budou", "kiui"];
    $atstr = implode("@", $fruits);
    var_dump($atstr);

    $re_fruits = explode("@", $atstr);
    var_dump($re_fruits);
?>