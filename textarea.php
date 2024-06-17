<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>入力内容の確認</title>
    </head>
    <body>
    <p>ご感想・ご質問：
        <?php echo htmlspecialchars($_POST['opinion']); ?>
    </p>
    </body>
</html>