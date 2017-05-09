<?php
    function br(){
        echo nl2br("\n"); //<br />タグが挿入される。
    }
    const HOGE = "hogehoge";
    const fuga = "fugafuga";

    print "<ul>";
    print "<li>".HOGE."</li>";
    print "<li>".fuga."</li>";
    print "</ul>";

    define("GREETING", "Welcome to W3Schools.com!<br />");
    echo GREETING;

    const aaa = "Hello PHP";
    define("bbb", "Hello PHP 5.3");
    print aaa;
    br();
    print bbb;
    br();
    print strlen("hello world");
    br();
    print str_word_count("hello world");
    br();
    print strrev("teapot");
    br();
    echo strpos("Supercalifragilisticexpialidocious", "exp");
    br();
    echo str_replace("Hello", "Hell", "Hello world!");
    br();
    $hoge = strrev("Hello world!");
    print strrev($hoge);
    br();
    echo str_replace("Hello", "The", "Hello world!");
    br();
    $x=0;
    while($x<30){
        print $x;
        $x++;
    }
    br();
    for($y=0;$y<10;$y++){
        print $y;
    }
    br();
    $s = 0;
    $i = 0;
    do{
      ++$i;
      $s += $i;
    }while($i < 1000);
    print "1から".$i."までの和は".$s;
    for ($a=0;$a<=3;$a++){
        print( "$a<br />" );
    }
    $array = array("ド","レ","ミ","ファ","ソ","ラ","シ","ド");
    for($i=0;$i<8;$i++){
        print $array[$i];
    }
    $like1["color"]="red";
    $like2["food"]="sushi";
    print_r($like2);
    br();
    $color=array("red","green","blue");
    foreach($color as $iro=>$value){
        print("$iro : $value<br />");
    }
    for($i=0; $i<10; $i++){
        if($i == 5){
            echo $i."に着いた<br>";
            continue;
        }
        echo $i . "<br>";
    }
   echo "<hr>";
   $x=0;
   for($i=0; $i<10; $i++){
          if($i == 5){
            echo $i."に着いた<br>";
            continue;
          }else if($i == 9){
            echo "最後になった<br>";
            break;
          }
          echo $i . "<br>";
    }

    for($i = 1; $i <= 5; $i++){
        echo "number　: $i <br>";
    }
    $colors = ["赤" , "緑" , "青" , "黄色"];
    $youso = count($colors);
    for($i = 0; $i<$youso; $i++){
        print $colors[$i];
    }

    $x = 1;
    for($i = 0 ;$i < 5 ; $i++){
        $x = $i + 1;
        echo "number:$x<br>" ;
    }
 ?>
