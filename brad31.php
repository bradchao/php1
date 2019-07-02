<?php
$mystr = 'abc';
$findme = 'x';

$pos = strpos($mystr, $findme);
if ($pos !== false){
    echo 'Find it';
}else{
    echo 'not found';
}