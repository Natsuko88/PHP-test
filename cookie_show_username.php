<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>クッキーを表示する</title>
</head>
<body>
<?php 
echo '<p>名前：' .htmlspecialchars($_COOKIE['username']).
'</p>';
?>
</body>
</html>