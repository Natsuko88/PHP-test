<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>入力内容の確認ページ</title>
</head>
<body>
<?php

//$_SESSION に入力データを保存する
$_SESSION['handle'] = $_POST['handle'];
$_SESSION['email'] = $_POST['email'];

// 名前とメールアドレスを表示する
  echo '<h1>入力内容の確認 </h1>';
  echo '<p>名前：' . htmlspecialchars($_SESSION['handle']) . '</p>';
  echo '<p>メールアドレス：' . htmlspecialchars($_SESSION['email']) . '</p>';

?>
</body>
</html>