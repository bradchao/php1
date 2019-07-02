<?php
sayYa(); sayYa();
sayHello('Brad');
sayHello('Tony');
sayHelloV2();
//sayHelloV2('Brad');
echo '<hr>';
sayHelloV3();
sayHelloV3('Mary');
sayHelloV3(array('Brad', 'Peter', 'Andy', 'Kevin'));
echo '<hr>';
sayHelloV4();
sayHelloV4('Hello');
sayHelloV4('Hello',1,2,3,4);

function sayYa(){
    echo 'Ya<br>';
}

function sayHello($name){
    echo "Hello, {$name}<br>";
}

function sayHelloV2($n = 1, $name = 'World'){
    for ($i=0; $i<$n;$i++){
        echo "Hello, {$name}<br>";
    }
}
function sayHelloV3($names = 'World'){
    if (is_array($names)){
        foreach($names as $name){
            echo "Hello, {$name}<br>";
        }
    }else{
        echo "Hello, {$names}<br>";
    }
}

function sayHelloV4(){
    $names = func_get_args();
    foreach($names as $name){
        echo "Hello, {$name}<br>";
    }

}
