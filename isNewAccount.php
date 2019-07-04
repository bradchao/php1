<?php
if (!isset($_GET['account'])) die();

include_once 'sql.php';

$account = $_GET['account'];
$sql = "select * from member where account = '{$account}'";
$result = $mysqli->query($sql);
echo $result->num_rows;
//echo 1;