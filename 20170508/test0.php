<?php
function br(){
    echo nl2br("\n"); //<br />タグが挿入される。
}
$x=1;
print "課題".$x;
$x++;
br();
$i = "Hello world!";
$j = 8;
$k = 10.5;
// print $i."<br />".$j."<br />".$k."<hr />";
print $i;
br();
print $j;
br();
print $k;
br();
print "課題".$x;
$x++;
br();
function fnkLocal(){
    $local=10;
    print $local;
}
fnkLocal();
br();
print "課題".$x;
$x++;
br();
function fnkGlobal(){
    global $global;
    print $global;
}
$global = 5;
fnkGlobal();
 ?>
