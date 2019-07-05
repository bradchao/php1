<?php
    include_once 'sql.php';

    if (isset($_REQUEST['cloneid'])){
        $cloneid = $_REQUEST['cloneid'];
        $sql = "INSERT INTO product (pname,price) ". 
                "SELECT pname,price FROM product WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('i', $cloneid);
        $stmt->execute();
        //echo $stmt->error;
    }else if (isset($_REQUEST['delid'])){
        $delid = $_REQUEST['delid'];
        $sql = "DELETE FROM product WHERE id = ?";

        //$mysqli->query($sql);

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('i', $delid);
        $stmt->execute();
    }



    // select * from product
    $sql = 'select * from product';
    $result = $mysqli->query($sql);
?>

<script>
    function confirmDelete(pname){
        return confirm('Delete ' + pname + "?");
    }
</script>

<a href='addProduct.php'>Add New Product</a>
<hr />
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>Edit / Delete / clone</th>
    </tr>
    <?php
        while ( $product = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$product->id}</td>";
            echo "<td>{$product->pname}</td>";
            echo "<td>{$product->price}</td>";
            echo "<td>";
            echo "<a href='editProduct.php?editid={$product->id}'>Edit</a> | ";
            echo 
        " <a href='?delid={$product->id}' onclick='return confirmDelete(\"{$product->pname}\");'>Delete</a> | ";
            echo " <a href='?cloneid={$product->id}'>Clone</a> ";
            echo "</td>";
            echo '</tr>';
        }
    ?>

</table>