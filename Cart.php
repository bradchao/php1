<?php
class Cart {
    private $list;  // $list => array, $list['product id'] = quantity

    function __construct(){
        $this->list = array();
    }

    function addProduct($pid, $qty){
        if (!key_exists($pid, $this->list)){
            $this->list[$pid] = $qty;
        }
    }
    function modifyProduct($pid, $qty){
        if (key_exists($pid, $this->list)){
            $this->list[$pid] = $qty;
        }
    }
    function removeProduct($pid){
        if (key_exists($pid, $this->list)){
            unset($this->list[$pid]);
        }
    }
    function clearAll(){
        $this->list = array();
    }

    function getList(){
        return $this->list;
    }

    function getItemQty($pid){
        $ret = -1;
        if (key_exists($pid, $this->list)){
            $ret = $this->list[$pid];
        }
        return $ret;
    }

}
?>