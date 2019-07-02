<?php
    include_once 'bradutils.php';

    $twid = createTWId(false);
    echo $twid . '<br>';
    if (isTWId($twid)){
        echo 'OK';
    }else{
        echo 'XX';
    }


?>