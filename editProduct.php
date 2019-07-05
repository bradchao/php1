<?php
include_once 'sql.php';
if (isset($_REQUEST['editid'])){
    // edit mode
    // query data
    $editid = $_REQUEST['editid'];
    $sql = "select * from product where id = {$editid}";
    $result = $mysqli->query($sql);
    $product = $result->fetch_object();
}else if (isset($_REQUEST['updateid'])){
    // update mode
    $updateid = $_REQUEST['updateid'];
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $sql = "UPDATE product SET pname='{$pname}', price={$price} WHERE id = {$updateid}";
    $mysqli->query($sql);
    header('Location: bmain.php');
}
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
Edit Product:<hr />
<form method='get' action='editProduct.php'>
    <input type="hidden" name="updateid" value='<?php echo $product->id; ?>' />    
    PName: <input type='text' name='pname' value='<?php echo $product->pname; ?>' /><br>
    Price: <input type="number" name="price" value='<?php echo $product->price; ?>' /><br>
    <input type="submit" value="Update" />
</form>