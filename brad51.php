<?php
    $dstW = 240; $dstH = 240;

    $src = ImageCreateFromJpeg("upload/w.jpg");
    $srcW = ImageSX($src); $srcH = ImageSY($src);
    //echo "{$srcW} : {$srcH}<br>";

    if ($srcW > $srcH){
        // w-type
        $dstX = $dstW;
        $dstY = $dstH * $srcH / $srcW;
    }else{
        // h-type
        $dstY = $dstH;
        $dstX = $dstW * $srcW / $srcH;
    }

    //echo "{$dstX} : {$dstY}";

    $dst = ImageCreate($dstX, $dstY);

    imagecopyresampled ($dst,$src, 
        0 , 0, 
        0,  0, 
        $dstX , $dstY , 
        $srcW , $srcH );

    // ImageCopyResized ($dst,$src, 
    //     0 , 0, 
    //     0,  0, 
    //     $dstX , $dstY , 
    //     $srcW , $srcH );


    //header("Content-type: image/jpeg");
    imageJpeg($dst, "dir1/newW.jpg");

    ImageDestroy($src);
    ImageDestroy($dst);

?>