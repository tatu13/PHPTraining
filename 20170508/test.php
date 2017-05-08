<?php
$test = "hello world";
print $test."<br />";
if($test!="hello world"){
    print "違います";
}else{
    print "合ってます";
}

function local(){
    $local="test";
    print $local.$grobal."\n";
}
$grobal="isTest";
 ?>
