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
echo '<p>名前：' .$_SESSION['name'] .'</p>';
?>
</body>
</html>