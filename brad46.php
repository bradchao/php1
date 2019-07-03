<?php
if (!isset($_FILES['upload'])) exit(0);
$upload = $_FILES['upload'];
if ($upload['error'] == 0){
    // if (copy($upload['tmp_name'], "upload/{$upload['name']}")){
    //     echo 'Upload Success';
    // }else{
    //     echo 'Upload Failure';
    // }

    if (is_uploaded_file($upload['tmp_name'])){
        if (move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")){
            echo 'Upload Success';
        }else{
            echo 'Upload Failure';
        }
    }


}else{
    echo 'Ooop!';
}
