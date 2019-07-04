<?php
$mysqli = new mysqli('localhost','root','','cy');
$mysqli->set_charset('utf8');

$sql = 'SELECT * FROM cust';
$stmt = $mysqli->prepare($sql);
$stmt->execute();
$stmt->store_result();
echo $stmt->num_rows . '<hr>';
$stmt->bind_result($id,$cname,$tel,$birthday);

$ret = new stdClass();    // Object()
if ($stmt->num_rows>0){
    $ret->result = $stmt->num_rows;
    $row = [];
    while ($stmt->fetch()){
        //echo "{$id} : {$cname} : {$tel} : {$birthday}<br>";
        $row['id'] = $id;
        $row['cname'] = $cname;
        $row['tel'] = $tel;
        $row['birthday'] = $birthday;
        
        $ret->data[] = $row;
    }
}else{
    $ret->result = 'no data';
}

$stmt->free_result();
$stmt->close();

echo json_encode($ret);