<?php

$img = imagecreatefromjpeg ("upload/coffee.jpg");

$yellow = ImageColorAllocate($img, 255,255,0);
imagettftext ($img, 36, rand(-30,30), 100, 200, $yellow, 
    "c:/xampp/htdocs/myphp/php1/fonts/myfont.otf", "Hello, World");

header("Content-type: image/jpeg");
ImageJpeg($img);

ImageDestroy($img);
