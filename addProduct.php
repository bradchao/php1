<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
<?php
include_once 'sql.php';
if (isset($_REQUEST['pname'])) {
    $pname = $_REQUEST['pname']; $price = $_REQUEST['price'];
    $sql = "INSERT INTO product (pname,price) VALUES ('{$pname}',{$price})";
    $mysqli->query($sql);

    $newid = $mysqli->insert_id;
    if (isset($_FILES['pimg'])){
        $pimg = $_FILES['pimg']; $n = 1;
        foreach($pimg['error'] as $i => $errno){
            if ($errno == 0){
                copy($pimg['tmp_name'][$i], "pimgs/p_{$newid}_{$n}.jpg");
                $n++;
            }
        }
    }
    header('Location: bmain.php');
}

?>
<form method='post' action='addProduct.php' enctype='multipart/form-data'>
    PName: <input type='text' name='pname' /><br>
    Price: <input type="number" name="price" /><br>
    PImag1: <input type="file" name="pimg[]" /><br>
    PImag2: <input type="file" name="pimg[]" /><br>
    PImag3: <input type="file" name="pimg[]" /><br>
    PImag4: <input type="file" name="pimg[]" /><br>
    PImag5: <input type="file" name="pimg[]" /><br>
    <input type="submit" value="Add" />
</form>