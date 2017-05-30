<?php
if(isset($_POST["pass"])){
    if($_POST["pass"]!="onigiri"){
        echo '<script type="text/javascript">
                  alert("パスワードが違います。");
                  location.href = "login.php";
              </script>';
    }
}
 ?>
<html>
<head>
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/style_control.css" type="text/css">
    <title>お問い合わせ一覧</title>
</head>
<body>
    <div id="wrap">
        <p>ようこそ　管理者様</p>
        <a href="input.php">ログアウトする</a>
        <div id="form_inner">
            <?php
            date_default_timezone_set('Asia/Tokyo');
            $file_path = "enq.csv";
            print '<table class="flat-table center">';
                print '<tr>
                        <th>No</th>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>住所</th>
                        <th>電話番号</th>
                        <th>メールアドレス</th>
                        <th>どこで知ったか</th>
                        <th>質問カテゴリ</th>
                        <th>質問内容</th>
                        </tr>';
            if(($han = fopen($file_path,"r")) !== false){
                while (($row = fgetcsv($han, 1000, ",")) !== FALSE) {
                  $data[] = array( 'id'=>$row[0] ,'name'=>$row[1], 'sex'=>$row[2],'place'=>$row[3],'phone'=>$row[4], 'mail'=>$row[5], 'where'=>$row[6],'category'=>$row[7], 'naiyou'=>$row[8]);
                }
                foreach ($data as $key => $row) {
                    $id[$key]   = $row['id'];
                    $name[$key] = $row['name'];
                    $sex[$key] = $row['sex'];
                    $place[$key]  = $row['place'];
                    $phone[$key]   = $row['phone'];
                    $mail[$key] = $row['mail'];
                    $where[$key] = $row['where'];
                    $category[$key]  = $row['category'];
                    $naiyou[$key]  = $row['naiyou'];
                }
                 array_multisort($id,SORT_DESC, $name, SORT_ASC, $sex, SORT_ASC, $place, SORT_ASC, $phone, SORT_ASC, $mail, SORT_ASC, $where, SORT_ASC, $category, SORT_ASC, $naiyou, SORT_ASC, $data);
                for( $i=0 ; $i<count( $data ) ; $i++ ) {
                    if(strpos($name[$i],'&?!comma') !== false){
                        $name[$i] = str_replace('&?!comma',',',$name[$i]);
                    }
                    if(strpos($place[$i],'&?!comma') !== false){
                        $place[$i] = str_replace('&?!comma',',',$place[$i]);
                    }
                    if(strpos($naiyou[$i],'&?!comma') !== false){
                        $naiyou[$i] = str_replace('&?!comma',',',$naiyou[$i]);
                    }
                    if($sex[$i]=="male"){
                        $sex[$i]="男性";
                    }elseif($sex[$i]=="female"){
                        $sex[$i]="女性";
                    }else{
                        $sex[$i]="不明";
                    }
                    if($where[$i]=="1"){
                        $where[$i]="新聞";
                    }elseif($where[$i]=="2"){
                        $where[$i]="雑誌";
                    }elseif($where[$i]=="3"){
                        $where[$i]="新聞と雑誌";
                    }else{
                        $where[$i]="特になし";
                    }
                    if($category[$i]=="question"){
                        $category[$i]="ご質問";
                    }elseif($category[$i]=="trouble"){
                        $category[$i]="トラブル、違反報告";
                    }else{
                        $category[$i]="その他";
                    }
                    $id[$i]=ltrim($id[$i], '0');
                    echo "\t<tr>\n";
                            echo "\t\t<td width='30'>{$id[$i]}</td>\n";
                            echo "\t\t<td max-width='150'>{$name[$i]}</td>\n";
                            echo "\t\t<td width='50'>{$sex[$i]}</td>\n";
                            echo "\t\t<td max-width='300'>{$place[$i]}</td>\n";
                            echo "\t\t<td width='150'>{$phone[$i]}</td>\n";
                            echo "\t\t<td max-width='150'>{$mail[$i]}</td>\n";
                            echo "\t\t<td width='100'>{$where[$i]}</td>\n";
                            echo "\t\t<td width='110'>{$category[$i]}</td>\n";
                            echo "\t\t<td max-width='150'>{$naiyou[$i]}</td>\n";
                    echo "\t</tr>\n";
                }fclose($han);
            }else{
                print '<tr>
                            <td>データがありません</td>
                        </tr>';
            }
            echo'</table>';

            ?>
        </div>
    </div>
</body>

</html>
