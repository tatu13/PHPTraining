<?php
    $data = array();
    $alp = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    $k=0;
    for($i=0;$i<=5;$i++){
        for($j=0;$j<=5;$j++){
            if($k==26){
                break;
            }
            $data[$i][$j] = $alp[$k];
            $k++;
            if($data[$i][$j]=="B"||$data[$i][$j]=="F"||$data[$i][$j]=="X"){
                print " ";
            }else{
                print $data[$i][$j]."<br />";
            }

        }
    }

    function hoge(){
        $num=1;
        for($i=0;$i<4;$i++){
            print $i;
        }
    }

    function familyName($fname, $year) {
        echo "$fname yamada. が生まれた年は $year <br>";
    }
    function test($test1, $test2) {
        echo $test1.$test2;
    }
    familyName("yuuki","1975");
    familyName("hirobumi","1978");
    familyName("yukiko","1983");
    test("aaa","iii");
    $x=1;
    $y=2;
    test($x,$y);
    //グローバル変数じゃないと関数に変数を渡せないっぽい
    hoge();
?>
