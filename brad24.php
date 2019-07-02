<?php

$a[0] = 123;
$a[1] = array(1,2,3,4);

echo $a[0] . '<br>';
echo $a[1][0] . '<br>';
echo $a[1][2] . '<br>';
var_dump($a);
echo '<hr>';
echo is_array($a[1]);