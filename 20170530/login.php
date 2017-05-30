<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/common.css" type="text/css">
<link rel="stylesheet" href="css/style_login.css" type="text/css">
<title>入力</title>
</head>
<body>
    <div id="wrap">
        <div id="form">
            <section id="form_inner">
                <form action="control.php" method="post" id="input">
                    <table>
                        <tr>
                            <td id="warn">警告</td>
                        </tr>
                        <tr>
                            <td class="center">
                                貴方がアクセスを試みているファイルはレベル3クリアランスを持つ<br />人員にのみアクセスが許可されています。
                                <br /><br />必要なクリアランス無しにこれ以上のアクセスを試みることは<br />財団による雇用の終了、
                                全ての教育上、医療上、退職後、<br />あるいは死亡時の福利厚生を取り消す根拠となります。
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <input type="text" name="pass" placeholder="パスワードを入れてください">
                            </td>
                        </tr>
                        <tr class="center">
                            <td><input type="submit" value="送信"></td>
                        </tr>
                    </table>
                </form>
            </section>
        </div>
    </div>
</body>

</html>
