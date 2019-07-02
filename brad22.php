<?php
$a = array(1,2,3,7 => 4,5,6,'Brad', 12.3);
for ($i=0; $i<=11; $i++){
    echo $a[$i] . '<br>';
}
echo '<hr>';
foreach ($a as $key => $value){
    echo $key . ' => ' . $value . '<br>';
}