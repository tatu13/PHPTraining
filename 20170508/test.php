<?php
$test = "hello world";
print $test."<br />";

$global="isTest";
function local(){
    $local="test";
    global $global;
    print $local."&nbsp;".$global."\n";
    echo "aaaa","bbbb";
    print "aaaa"."bbbb";
}

local();
 ?>
