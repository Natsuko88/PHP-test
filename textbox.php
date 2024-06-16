<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charaset="utf-8">
        <title>入力内容の確認</title>
    </head>
    <body>
        <?php
         echo '<p>入力された名前：' . htmlspecialchars($_GET['handle'],ENT_QUOTES,'文字コード') .'</p>';
         ?>
    </body>
</html>