<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta chraset="utf-8">
<title>セッション</title>
</head>
<body>
<?php $_SESSION['name'] ='伊藤静香';
echo '<p><a href="session_3.php">保存データを確認する</a></p>' ;
?>
</body>
</html>