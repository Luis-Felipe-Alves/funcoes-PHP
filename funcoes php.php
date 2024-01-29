<?php

function dobrar($numero){
     echo $numero * 2 . PHP_EOL; 
}

$valores = [1,2,3,4,5];

foreach($valores as $index => $elemento){
    dobrar(numero: $elemento);
}
