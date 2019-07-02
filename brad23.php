<?php
$person['name'] = 'Brad';
$person['age'] = 18;
$person['weight'] = 90;
echo $person['name'];
echo '<hr>';
foreach($person as $key => $value){
    echo "{$key} : {$value}<br>";
}

