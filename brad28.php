<?php

function test1($var1){
    $var1 += 10;
    return $var1;
}
function test2(&$var1){
    $var1 += 10;
}

$var1 = 100;
test2($var1);

echo $var1;

