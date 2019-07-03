<?php
if (!isset($_FILES['upload'])) exit(0);
$upload = $_FILES['upload'];

foreach($upload['error'] as $k => $v){
    if ($v == 0){
        if (is_uploaded_file($upload['tmp_name'][$k])){
            if (move_uploaded_file($upload['tmp_name'][$k],
                "upload/{$upload['name'][$k]}")){
                echo "{$upload['name'][$k]} Upload Success<br>";
            }else{
                echo "{$upload['name'][$k]} Upload Failure<br>";
            }
        }
    }
}
