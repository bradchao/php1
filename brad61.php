<?php
    spl_autoload_register(function($class_name){
        require_once "{$class_name}.php";
    });

    $obj1 = new MyClass1;
    $obj2 = new MyClass2;
    $obj1->showMe();
    $obj2->showMe();
    $c1 = new Cart;
    $c1->addProduct('P001', 30);
    $c1->addProduct('P002', 2);
    $myList = $c1->getList();
    var_dump($myList);
?>