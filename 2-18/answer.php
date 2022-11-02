<link rel="stylesheet" href="style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $my_name = $_POST['my_name'];
    $first_choice = $_POST['first_choice'];
    $second_choice = $_POST['second_choice'];
    $third_choice = $_POST['third_choice'];
    $first_answer = $_POST['first_answer'];
    $second_answer = $_POST['second_answer'];
    $third_answer = $_POST['third_answer'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function getScoring($choice, $answer) {
        if ($choice === $answer) {
            echo "正解！";
        } else {
            echo "残念・・・";
        }
    }
?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    getScoring($first_choice, $first_answer);
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    getScoring($second_choice, $second_answer);
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    getScoring($third_choice, $third_answer);
?>