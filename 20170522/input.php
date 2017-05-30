<?php
    session_start();
    if(isset($_SESSION["sei"])){
        $sei=$_SESSION["sei"];
    }else{
        $sei="";
    }
    if(isset($_SESSION["mei"])){
        $mei=$_SESSION["mei"];
    }else{
        $mei="";
    }
    if(isset($_SESSION["sex"])){
        $sex=$_SESSION["sex"];
    }else{
        $sex="";
    }
    if(isset($_SESSION["place"])){
        $place=$_SESSION["place"];
    }else{
        $place="";
    }
    if(isset($_SESSION["phone1"])){
        $phone1=$_SESSION["phone1"];
    }else{
        $phone1="";
    }
    if(isset($_SESSION["phone2"])){
        $phone2=$_SESSION["phone2"];
    }else{
        $phone2="";
    }
    if(isset($_SESSION["phone3"])){
        $phone3=$_SESSION["phone3"];
    }else{
        $phone3="";
    }
    if(isset($_SESSION["mail1"])){
        $mail1=$_SESSION["mail1"];
    }else{
        $mail1="";
    }
    if(isset($_SESSION["mail2"])){
        $mail2=$_SESSION["mail2"];
    }else{
        $mail2="";
    }
    if(isset($_SESSION["where"])){
        $where=$_SESSION["where"];
    }else{
        $where=0;
    }
    if(isset($_SESSION["question"])){
        $question=$_SESSION["question"];
    }else{
        $question="";
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>入力</title>
</head>
<body>
    <div id="wrap">
        <div id="form">
            <form action="confirm.php" method="post">
            <table>
                <tr>
                    <td colspan="2" class="center">お問い合わせ</td>
                </tr>
                <tr>
                    <td>性</td>
                    <td><?php print '<input type="text" name="sei" value="'.$sei.'">';?></td>
                </tr>
                <tr>
                    <td>名</td>
                    <td><?php print '<input type="text" name="mei" value="'.$mei.'">';?></td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td>
                        <?php
                            if($sex=="男"){
                                print '<input type="radio" name="sex" value="male" checked="checked">&nbsp;男&nbsp;
                                <input type="radio" name="sex" value="female">&nbsp;女&nbsp;
                                <input type="radio" name="sex" value="unknown">&nbsp;不明';
                            }elseif($sex=="女"){
                                print '<input type="radio" name="sex" value="male">&nbsp;男&nbsp;
                                <input type="radio" name="sex" value="female" checked="checked">&nbsp;女&nbsp;
                                <input type="radio" name="sex" value="unknown">&nbsp;不明';
                            }elseif($sex=="不明"){
                                print '<input type="radio" name="sex" value="male">&nbsp;男&nbsp;
                                <input type="radio" name="sex" value="female">&nbsp;女&nbsp;
                                <input type="radio" name="sex" value="unknown" checked="checked">&nbsp;不明';
                            }else{
                                print '<input type="radio" name="sex" value="male">&nbsp;男&nbsp;
                                <input type="radio" name="sex" value="female">&nbsp;女&nbsp;
                                <input type="radio" name="sex" value="unknown">&nbsp;不明';
                            }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td><?php print '<input type="text" name="place" value="'.$place.'">';?></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><?php print '<input type="number" name="phone1" class="phone1" value="'.$phone1.'">ー<input type="number" name="phone2" class="phone1" value="'.$phone2.'">ー<input type="number" name="phone3" class="phone2" value="'.$phone3.'">';?></td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td><?php print '<input type="text" name="mail1" class="mail1" value="'.$mail1.'">@<input type="text" name="mail2" class="mail2" value="'.$mail2.'">';?></td>
                </tr>
                <tr>
                    <td>どこで知ったか</td>
                    <td>
                        <?php
                            if($where=="0"){
                                print '<input type="checkbox" name="where[]" value="book">雑誌&nbsp;
                                <input type="checkbox" name="where[]" value="newspaper">新聞';
                            }elseif($where=="1"){
                                print '<input type="checkbox" name="where[]" value="book" checked="checked">雑誌&nbsp;
                                <input type="checkbox" name="where[]" value="newspaper">新聞';
                            }elseif($where=="2"){
                                print '<input type="checkbox" name="where[]" value="book">雑誌&nbsp;
                                <input type="checkbox" name="where[]" value="newspaper" checked="checked">新聞';
                            }elseif($where=="3"){
                                print '<input type="checkbox" name="where[]" value="book" checked="checked">雑誌&nbsp;
                                <input type="checkbox" name="where[]" value="newspaper" checked="checked">新聞';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>質問カテゴリ</td>
                    <td>
                        <select name="category">
                            <option value="">--選択してください--</option>
                            <option value="life">ライフスタイル</option>
                            <option value="pc">PC</option>
                            <option value="other">その他</option>
                        </select>
                    </td>
                </tr>
            </table>
                質問内容<br />
                <?php print '<textarea name="question" value="'.$question.'"></textarea>' ?>
                <br />
            <table>
                <tr class="center">
                    <td><input type="submit" value="送信"></td>
                    <td><input type="reset" value="リセット"></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>

</html>
