<?php
    include_once 'bradutils.php';

    $twid = 'X123456789';
    if (isTWId($twid)){
        echo 'OK';
    }else{
        echo 'XX';
    }


?>