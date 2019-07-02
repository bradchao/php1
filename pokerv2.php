<?php
$poker = []; $counter = 0;
for ($i=0; $i<52; $i++){

    do{
        $rand = rand(0,51);
        $counter++;
        // 檢查機制
        $isRepeat = false;
        for ($j=0; $j<$i; $j++){
            if ($rand == $poker[$j]){
                $isRepeat = true;
                break;
            }
        }
    }while ($isRepeat);

    $poker[$i] = $rand;
    echo $poker[$i] . '<br>';
}
echo '<hr>';
echo $counter;

