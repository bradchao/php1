<?php
include_once 'bradutils.php';
session_start();

$var1 = new Student(90,87,50);
echo "Sum: {$var1->sum()}; Avg: {$var1->avg()}<br>";

$_SESSION['var1'] = $var1;

$var1->setCh(9);

?>
<a href='brad55.php'>Next Page</a>
