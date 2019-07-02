<?php
echo count($_ENV);
echo "<hr>";
foreach($_ENV as $key => $value){
    echo "{$key} => {$value}<br>";
}
