<?php
    include_once 'bradutils.php';
    session_start();

    $var1 = $_SESSION['var1'];

    echo "Sum: {$var1->sum()}; Avg: {$var1->avg()}<br>";
?>