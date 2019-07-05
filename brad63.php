<?php
//$ch = curl_init("http://localhost/myphp/php1/brad64.php");
$ch = curl_init("http://localhost/myphp/php1/brad65.php");

$dataString = "id=2";
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

$ret = curl_exec($ch);
curl_close($ch);

$ret = json_decode($ret);
if ($ret->code == '200'){
    echo  $ret->product->pname . " : " . $ret->product->price;
}

