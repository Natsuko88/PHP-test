<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>入力内容の確認</title>
    </head>
    <body>
    <?php $clean=array();

        switch($_GET['age']){
            case'10+':
            case'20+':
            case'30+':
            case'40+':
            case'50+':
            case'60+':
                $clean['age'] = $_GET['age'];
                break;
            default:
            /*エラー*/
            $clean['age']='入力し直してください';
            break;
        }
        echo '<p>年齢：'.$clean['age'].'</p>';
    ?>
    </body>
</html>