<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charaset="utf-8">
        <title>入力内容の確認</title>
    </head>
    <body>
        <?php
         echo '<p>入力された名前：' . htmlspecialchars($_POST['handle'],ENT_QUOTES,'文字コード') .'</p>';
         echo '<p> メールアドレス：' . htmlspecialchars($_POST['email']) . '</p>';
         
         $clean=array();
            switch ($_POST['sex']){
            case 'male':
            case 'female':
                $clean['sex'] = $_POST['sex'];
                break;
            default:
            /*エラー*/
            $clean['sex'] ='不正なデータです';
            break;
         }
         echo '<p>性別：'.$clean['sex'] .'</p>';
         switch($_POST['age']){
            case'10+':
            case'20+':
            case'30+':
            case'40+':
            case'50+':
            case'60+':
                $clean['age'] = $_POST['age'];
                break;
            default:
            /*エラー*/
            $clean['age']='入力し直してください';
            break;
        }
        echo '<p>年齢：'.$clean['age'].'</p>';
        echo '<p>使用機器の種類：<p>';
        foreach($_POST['device'] as $value){
        echo $value . ',';
        }
        echo '<p>ご感想・ご質問：' . htmlspecialchars($_POST['opinion']) . '</p>';
         
        //$_SESSION に入力データを保存する
$_SESSION['handle'] = $_POST['handle'];
$_SESSION['email'] = $_POST['email'];

if(isset($_POST['sex'])){ //チェックが0のときにエラーが出ないようにするif～else文
  $_SESSION['sex'] = $_POST['sex'];
} else {
  $_SESSION['sex'] = '';
}

$_SESSION['age'] = $_POST['age'];

if(isset($_POST['device'])){ //チェックが0のときにエラーが出ないようにするif～else文
  $_SESSION['device'] = $_POST['device'];
} else {
  $_SESSION['device'] = array();
}

$_SESSION['opinion'] = $_POST['opinion'];
?>
<p><b>この内容で送信してよろしいですか？</b></p>
<button onClick="history.back();">修正する</button>
<button onClick="location.href='sendmail.php'">送信する</button>
</body>
</html>