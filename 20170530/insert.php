<?php
    session_start();
    //ここでは最初csvが空だった時にどうしてもエラー吐いちゃうので意図的に無視させてます。
    error_reporting(0);
    //$_POST["name"]があったら全部あるって判定にしてます。
    if(isset($_POST["name"])){
        $name=$_POST["name"];
        $sex=$_POST["sex"];
        $place=$_POST["place"];
        $phone=$_POST["phone"];
        $mail=$_POST["mail"];
        $kekka=$_POST["where"];
        $category=$_POST["category"];
        $question=$_POST["question"];
        //特殊記号なんて入れさせない。
        $name=htmlspecialchars($name,ENT_NOQUOTES,"UTF-8");
        $place=htmlspecialchars($place,ENT_NOQUOTES,"UTF-8");
        $mail=htmlspecialchars($mail,ENT_NOQUOTES,"UTF-8");
        $question=htmlspecialchars($question,ENT_NOQUOTES,"UTF-8");
    }
    //ファイルパス決めてー。
    $file_path = "enq.csv";
    if(isset($name)){
        $data = file('enq.csv', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        //enq.csvにデータがあるなら一旦取り出しておきます。
        if(!empty($data[count($data)-1])){
            //あったらIDのデータを取り出して＋１。
            $last_row = $data[count($data)-1];
            $list = explode(',', $last_row);
            $count=$list[0];
            $count=ltrim($count, '0');
            $count+=1;
            //最後に6桁の0埋めして終了。
            $count=sprintf("%06d",$count);
        }else{
            //何もなかったら1から始めて0埋め。
            $count=1;
            $count=sprintf("%06d",$count);
        }
        //そしてデータを連想配列に
        $datas = array('cnt'=>$count,'name'=> $name,'sex'=> $sex,'place'=>$place,'phone'=>$phone,'mail'=> $mail,'kekka'=> $kekka,'category'=>$category,'question'=> $question);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $fpa = fopen($file_path , 'a');
            if($fpa){
                //入れて終わり。
                fputcsv($fpa,$datas);
            }
            fclose($fpa);
        }
    }
    //最後に残ったセッションを廃棄して終わり。
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
        <link rel="stylesheet" href="css/common.css" type="text/css">
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
                <!-- （そんな機能あったらいいなぁ） -->
                <div id="enq_area" class="center">
                    <span id="enq_title"><h3>お問い合わせ番号</h3></span>
                    <p><?php print $count;?></p>
                </div>
                <a href="input.php">もう一度最初から入力する</a>
            </div>
        </div>
    </body>
</html>
