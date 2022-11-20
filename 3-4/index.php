<?php
    require_once("getData.php");

    $users_data = new getData();
    $display_users_data = $users_data->getUserData();
    $fetch_posts_data = $users_data->getPostData();
    $display_posts_data = $fetch_posts_data->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="top">
        <img src="yigroup.png" alt="" class="yi-pic">
        <div class="message">
            <p class="welcome-message"><?php echo "ようこそ"." ".$display_users_data["last_name"].$display_users_data["first_name"]." "."さん"?></p>
            <p class="login-message"><?php echo "最終ログイン日：".$display_users_data["last_login"] ?></p>
        </div>
    </div>
    <table>
        <tr>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
        </tr>
        <?php foreach ($display_posts_data as $values) { ?>
            <tr>
                <?php foreach ($values as $key => $value) { ?>
                    <td>
                        <?php if ($key === "category_no" && $value === "1") {
                            echo "食事";
                        } else if ($key === "category_no" && $value === "2") {
                            echo "旅行";
                        } else if ($key === "category_no" && $value === "3") {
                            echo "その他";
                        } else {
                            echo $value;
                        } ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <p class="footer">Y&I group.inc</p>
</body>
</html>