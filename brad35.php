<?php
date_default_timezone_set('Asia/Taipei');
$mydir = '.';
$fp = @opendir($mydir) or exit('Server Busy');
while ( $file = readdir($fp)){
    $mtime = filemtime("{$mydir}/{$file}");
    $ntime = date('Y-m-d H:i:s', $mtime);
    echo "{$file} : {$ntime}<br>";
}

if (unlink("./test1.html")){
    echo 'Delete OK';
}
