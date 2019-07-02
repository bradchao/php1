<?php
$poker = range(0,51);
shuffle($poker);

foreach($poker as $value){
    echo $value . '<br>';
}
echo '<hr>';

$players = [[],[],[],[]];
foreach($poker as $i => $card){
    $players[$i%4][(int)($i/4)] = $card;
}
