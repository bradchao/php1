<?php
$data['key1'] = 'value1';
$data['key2'] = 'value2';
$query = http_build_query(array("data" => $data));
echo $query; 