<?php
    $flg=0;
    session_start();
    if(isset($_POST["sei"])){
        $sei=$_POST["sei"];
        $sei=htmlspecialchars($sei,ENT_NOQUOTES,"UTF-8");
        $_SESSION["sei"]=$_POST["sei"];
        if($sei === "" || mb_ereg_match("\s",$sei)){
            $flg=1;
        }
    }else{
        $sei="";
        $flg=1;
    }
    if(isset($_POST["mei"])){
        $mei=$_POST["mei"];
        $mei=htmlspecialchars($mei,ENT_NOQUOTES,"UTF-8");
        $_SESSION["mei"]=$_POST["mei"];
        if($mei === "" || mb_ereg_match("\s",$mei)){
            $flg=1;
        }
    }else{
        $mei="";
        $flg=1;
    }
    if(isset($_POST["sex"])){
        $sex=$_POST["sex"];
        if($sex=="male"){
            $sex="男";
        }elseif($sex=="female"){
            $sex="女";
        }else{
            $sex="不明";
        }
        $_SESSION["sex"]=$sex;
    }else{
        $sex="";
        $flg=1;
    }
    if(isset($_POST["place"])){
        $place=$_POST["place"];
        $place=htmlspecialchars($place,ENT_NOQUOTES,"UTF-8");
        $_SESSION["place"]=$_POST["place"];
        if($place === "" || mb_ereg_match("\s",$place)){
            $flg=1;
        }
    }else{
        $place="";
        $flg=1;
    }
    if(isset($_POST["phone1"])){
        $phone1=$_POST["phone1"];
        $phone1=htmlspecialchars($phone1,ENT_NOQUOTES,"UTF-8");
        $_SESSION["phone1"]=$_POST["phone1"];
        if($phone1 === "" || mb_ereg_match("\s",$phone1)){
            $flg=1;
        }
    }else{
        $phone1="";
        $flg=1;
    }
    if(isset($_POST["phone2"])){
        $phone2=$_POST["phone2"];
        $phone2=htmlspecialchars($phone2,ENT_NOQUOTES,"UTF-8");
        $_SESSION["phone2"]=$_POST["phone2"];
        if($phone2 === "" || mb_ereg_match("\s",$phone2)){
            $flg=1;
        }
    }else{
        $phone2="";
        $flg=1;
    }
    if(isset($_POST["phone3"])){
        $phone3=$_POST["phone3"];
        $phone3=htmlspecialchars($phone3,ENT_NOQUOTES,"UTF-8");
        $_SESSION["phone3"]=$_POST["phone3"];
        if($phone3 === "" || mb_ereg_match("\s",$phone3)){
            $flg=1;
        }
    }else{
        $phone3="";
        $flg=1;
    }
    if(ctype_digit($phone1)==false||ctype_digit($phone1)==false||ctype_digit($phone1)==false){
        $flg=2;
    }
    if(strlen($phone1)!=3&&strlen($phone2)>=4&&strlen($phone2)<=3&&strlen($phone3)!=4){
        $flg=2;
    }
    if(isset($_POST["mail1"])){
        $mail1=$_POST["mail1"];
        $mail1=htmlspecialchars($mail1,ENT_NOQUOTES,"UTF-8");
        $_SESSION["mail1"]=$_POST["mail1"];
        if($mail1 === "" || mb_ereg_match("\s",$mail1)){
            $flg=1;
        }
    }else{
        $mail1="";
        $flg=1;
    }
    if(isset($_POST["mail2"])){
        $mail2=$_POST["mail2"];
        $mail2=htmlspecialchars($mail2,ENT_NOQUOTES,"UTF-8");
        $_SESSION["mail2"]=$_POST["mail2"];
        if($mail2 === "" || mb_ereg_match("\s",$mail2)){
            $flg=1;
        }
    }else{
        $mail2="";
        $flg=1;
    }
    if(isset($_POST['where'])&&is_array($_POST['where'])){
        if($_POST["where"][0]=="book"&&isset($_POST["where"][1])){
            $_SESSION["where"]=3;
            $kekka="雑誌と新聞で";
        }elseif($_POST["where"][0]=="book"){
            $_SESSION["where"]=1;
            $kekka="雑誌で";
        }elseif($_POST["where"][0]=="newspaper"){
            $_SESSION["where"]=2;
            $kekka="新聞で";
        }
    }else{
        $kekka="特になし";
    }
    if(isset($_POST['category'])){
        $category=$_POST["category"];
        $_SESSION["category"]=$_POST["category"];
    }
    if($category === ""){
        $category="未選択";
    }
    if($category=="未選択"){
        if(isset($_POST["question"])){
            $flg=1;
        }
    }else{
        if(isset($_POST["question"])){
            $question=$_POST["question"];
            $question=htmlspecialchars($question,ENT_NOQUOTES,"UTF-8");
            $_SESSION["question"]=$_POST["question"];
            if($question === "" || mb_ereg_match("\s",$question)){
                $question="未入力です";
            }
        }else{
            $question="未入力です";
        }
    }
    if($category === ""&&$question!="未入力です"){
        $category="その他";
    }
    if($flg==1){
        echo '<script type="text/javascript">
                  alert("未入力の項目があります。もう一度ご確認の上入力し直してください。");
                  history.go(-1);
              </script>';
    }elseif($flg==2){
        echo '<script type="text/javascript">
                  alert("入力されたデータに誤りがあります。もう一度ご確認の上入力し直してください。");
                  history.go(-1);
              </script>';
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/common.css" type="text/css">
        <title>入力</title>
    </head>
    <body>
        <div id="wrap">
            <table>
                <tr>
                    <td>お名前</td>
                    <td><?php print $sei.'&nbsp;'.$mei;?></td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td><?php print $sex;?></td>
                </tr>
                <tr>
                    <td>ご住所</td>
                    <td><?php print $place;?></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><?php print $phone1.'-'.$phone2.'-'.$phone3;?></td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td><?php print $mail1.'@'.$mail2;?></td>
                </tr>
                <tr>
                    <td>どこで知った？</td>
                    <td><?php print $kekka;?></td>
                </tr>
                <tr>
                    <td>カテゴリ</td>
                    <td><?php print $category?></td>
                </tr>
                <tr>
                    <td>質問内容</td>
                    <td><?php print $question;?></td>
                </tr>
                <tr>
                    <td>
                        <form action="send.php" method="post">
                            <?PHP
                                print '<input type="hidden" name="sei" value="'.$sei.'">';
                                print '<input type="hidden" name="mei" value="'.$mei.'">';
                                print '<input type="hidden" name="sex" value="'.$sex.'">';
                                print '<input type="hidden" name="place" value="'.$place.'">';
                                print '<input type="hidden" name="phone1" value="'.$phone1.'">';
                                print '<input type="hidden" name="phone2" value="'.$phone2.'">';
                                print '<input type="hidden" name="phone3" value="'.$phone3.'">';
                                print '<input type="hidden" name="mail1" value="'.$mail1.'">';
                                print '<input type="hidden" name="mail2" value="'.$mail2.'">';
                                print '<input type="hidden" name="kekka" value="'.$kekka.'">';
                                print '<input type="hidden" name="category" value="'.$category.'">';
                                print '<input type="hidden" name="question" value="'.$question.'">';
                            ?>
                            <input type="submit" value="送信">
                        </form>
                    </td>
                    <td>
                        <form action="input.php" method="post">
                            <input type="submit" value="修正する">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
