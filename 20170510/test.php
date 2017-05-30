<?php
    $score = rand(1,100);
    if($score>70){
        print $score."点で合格！";
    }else{
        print $score."点で不合格…";
    }
    print "<br /><a href=test.php>再挑戦する</a><br />";

    $color = rand(1,3);
    switch ($color) {
        case 1:
               $favcolor = "赤";
               break;
        case 2:
               $favcolor = "青";
               break;
        case 3:
              $favcolor = "白";
              break;
        default:
             $favcolor = "nan";
            break;
    }
    switch ($favcolor) {
        case "赤":
               echo "あなたの好きな色は赤!";
               break;
        case "青":
               echo "あなたの好きな色は青!";
               break;
        case "白":
              echo "あなたの好きな色は白!";
              break;
        default:
             echo "あなたの好きな色は何？";
            break;
    }
    print "<br />";print "<br />";
    $test = sqrt(35);
    print $test;
    print "<br />";
    $x = rand(1,20);
    $y = rand(21,40);
    $z = $x + $y;
    print "$x + $y は".$z;
    $x=1;
    $y='1';
    print "<br />";
    var_dump($x==$y);
    print "<br />";
    var_dump($x===$y);
    $x=1;
    while($x<10){
        print $x++;
        $x++;
    }
    print $x++;
    $X=rand(1,10);
    $Y=rand(1,10);
    if($X>=5&&$Y>=5){
        print "Congraturations!";
    }else{
        print "Try again";
    }

    $txt1="Hello";
    $txt2 = " world!";
    $txt1 .= $txt2;
    echo $txt1;

    $x = 15;
    $x %= 4;
    echo $x;
    $x = 10;
    $y = 7;
    echo $x * $y;

    print '<table border="1">';
    for($x=1;$x<=10;$x++){
        print '<tr>';
        for($y=1;$y<=10;$y++){
            $num=$x*$y;
            print "<td>$num</td>";
        }
        print '</tr>';
    }
    print '</table>';

    print '<a href="http://google.co.jp">goo';
    print '<br />gleへ</a>>'
?>
