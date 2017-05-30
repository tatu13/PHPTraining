<?php
    session_start();
    if(isset($_POST["name"])){
        $name=$_POST["name"];
        $sex=$_POST["sex"];
        $place=$_POST["place"];
        $phone=$_POST["phone"];
        $mail=$_POST["mail"];
        $kekka=$_SESSION["where"];
        $category=$_POST["category"];
        $question=$_POST["question"];
        $name=htmlspecialchars($name,ENT_NOQUOTES,"UTF-8");
        $place=htmlspecialchars($place,ENT_NOQUOTES,"UTF-8");
        $mail=htmlspecialchars($mail,ENT_NOQUOTES,"UTF-8");
        $question=htmlspecialchars($question,ENT_NOQUOTES,"UTF-8");
    }
    $file_path = "enq.csv";
    if(isset($name)){
        $data = file('enq.csv', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if(!empty($data[count($data)-1])){
            $last_row = $data[count($data)-1];
            $list = explode(',', $last_row);
            $count=$list[0];
            $count=ltrim($count, '0');
            $count++;
            $count=sprintf("%06d",$count);
        }else{
            $count=1;
            $count=sprintf("%06d",$count);
        }

        $datas = array('cnt'=>$count,'name'=> $name,'sex'=> $sex,'place'=>$place,'phone'=>$phone,'mail'=> $mail,'kekka'=> $kekka,'category'=>$category,'question'=> $question);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $fpa = fopen($file_path , 'a');
            if($fpa){
                fputcsv($fpa,$datas);
            }
            fclose($fpa);
        }
    }
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
    }
    session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style_comp.css" type="text/css">
        <title>入力</title>
    </head>
    <body>
        <div id="wrap">
            <div id="form" class="center">
                <h2>お問い合わせ完了</h2>
                お問い合わせを承りました。<br />
                頂きましたご質問への回答はメールアドレスにてご連絡いたします。<br />
                また、以下のお客様番号を入力していただくことで状態の確認も可能です。<br />
                <div id="enq_area" class="center">
                    <span id="enq_title"><h3>お問い合わせ番号</h3></span>
                    <p><?php print $count;?></p>
                </div>
                <a href="input.php">もう一度最初から入力する</a>
            </div>
        </div>
    </body>
</html>
