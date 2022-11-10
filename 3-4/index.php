<?php
    require_once("getData.php");

    $users_data = new getData();
    $display_users_data = $users_data->getUserData();

    $post_data = new getData();
    $fetch_posts_data = $post_data->getPostData();
    $display_posts_data = $fetch_posts_data->fetchAll(PDO::FETCH_ASSOC);
    for ($i=0; $i<5; $i++) {
        if ($display_posts_data[$i]["category_no"] === "1") {
            $display_posts_data[$i]["category_no"] = "食事";
        } else if ($display_posts_data[$i]["category_no"] === "2") {
            $display_posts_data[$i]["category_no"] = "旅行";
        } else {
            $display_posts_data[$i]["category_no"] = "その他";
        }
    }

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
                <?php foreach ($values as $value) { ?>
                    <td><?php echo $value; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <p class="footer">Y&I group.inc</p>
</body>
</html>