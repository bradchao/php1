<?php

$fp = @fopen('./dir1/file2.txt', 'a');
fwrite($fp, "Hello, World\n1234567\n");
fwrite($fp, "Hello, World\n1234567\n");
fwrite($fp, "Hello, World\n1234567\n");
fwrite($fp, "Hello, World\n1234567");
fflush($fp);
fclose($fp);