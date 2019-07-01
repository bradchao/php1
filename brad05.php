<script>
    function add(){
        let x = document.getElementById('x').value;
        let y = document.getElementById('y').value;
        let result = parseInt(x) + parseInt(y);
        document.getElementById('here').innerHTML = result;
    }
</script>
<?php
    $result = $x = $y = '';
    if (isset($_GET['x'])){
        $x = $_GET['x']; $y = $_GET['y'];
        $result = $x + $y;
        //echo "{$x} + {$y} = {$result}";
    }
?>
<form action="brad05.php">
<input id="x" name="x" value="<?php echo $x;?>">
+
<input id="y" name="y" value="<?php echo $y;?>">
<input type="submit" value="="><input type="button" value="=" onclick="add()"/>
<span id="here"></span>
<?php
    echo $result;
?>
</form>