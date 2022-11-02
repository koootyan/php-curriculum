<link rel="stylesheet" href="style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
    $first_question = ["80", "22", "20", "21"];
    $second_question = ["PHP", "Python", "JAVA", "HTML"];
    $third_question = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
    $first_answer = "80";
    $second_answer = "HTML";
    $third_answer = "select";
?>
<p>お疲れ様です<?php echo $my_name ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        foreach ($first_question as $value) { ?>
            <input type="radio" name="first_choice" value="<?php echo $value; ?>">
            <?php echo $value;
        }
            ?>
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        foreach ($second_question as $value) { ?>
            <input type="radio" name="second_choice" value="<?php echo $value; ?>">
            <?php echo $value;
        }
            ?>
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        foreach ($third_question as $value) { ?>
            <input type="radio" name="third_choice" value="<?php echo $value; ?>">
            <?php echo $value;
        }
            ?>
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="my_name" value="<?php echo $my_name; ?>" />
    <input type="hidden" name="first_answer" value="<?php echo $first_answer; ?>" />
    <input type="hidden" name="second_answer" value="<?php echo $second_answer; ?>" />
    <input type="hidden" name="third_answer" value="<?php echo $third_answer; ?>" />
    <br>
    <input type="submit" value="回答する" />
</form>