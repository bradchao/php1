<?php
$mysqli = new mysqli('localhost','root','','cy');
//echo $mysqli->connect_errno;
$mysqli->set_charset('utf8');

// $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES ("brad","123","1999-01-02")';
// $sql .= ', ("cy1","321","1999-01-02")';
// $sql .= ', ("cy2","321","1999-01-02")';

$cname = 'Kevin';
$tel = '0912-123456';
$birthday = '1999-03-04'; 

$sql = 'INSERT INTO cust (cname,tel,birthday) VALUES (?,?,?)';

// $sql = 'update cust set cname = "Tony" where id = 3';
// $sql = 'delete from cust where id = 2';

$stmt = $mysqli->prepare($sql);   // $stmt is a Object of mysqli_stmt
$stmt->bind_param('sss', $cname, $tel, $birthday);
$stmt->execute();
echo $stmt->affected_rows;
echo $mysqli->error;
// update cust set cname = "Tony" where id = 3
// delete from cust where id = 2;
