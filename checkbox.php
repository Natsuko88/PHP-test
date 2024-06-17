<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>入力内容の確認</title>
    </head>
    <body>
    <p>使用機器の種類：<?php
    foreach($_POST['device'] as $value){
        echo $value . ',';
    }
    ?></p>
    </body>
</html>