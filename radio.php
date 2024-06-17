<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>入力内容の確認</title>
    </head>
    <body>
        <?php
         $clean=array();
         
         switch ($_GET['sex']){
            case 'male':
            case 'female':
                $clean['sex'] = $_GET['sex'];
                break;
            default:
            /*エラー*/
            $clean['sex'] ='不正なデータです';
            break;
         }
         echo '<p>性別：'.$clean['sex'] .'</p>';
        ?>
    </body>
</html>