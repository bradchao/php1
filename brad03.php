<?php

$var1 = 1;  // $[a-zA-Z$_][a-zA-Z0-9$_]*
echo gettype($var1) . '<br>';
$var1 = 'Brad';
echo gettype($var1) . '<br>';
$var1 = true;
echo gettype($var1) . '<br>';
$var1 = 12.3;
echo gettype($var1) . '<hr>';

$var1 = 10; $var2 = 3;
$var3 = $var1 / $var2;
echo (int)($var3) . '<br>';  // double => integer
$var4 = $var1 % $var2;
echo $var4 . '<br>';
$var5 = 012;    // 0- => 八進位
echo $var5 . '<br>';
$var6 = 0x12;
echo $var6 . "<br>";

$var7 = 10;
$var8 = ++$var7;
echo "{$var7} : {$var8}<br>";




