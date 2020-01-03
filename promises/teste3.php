<?php

require './vendor/autoload.php';

use React\Promise\Promise;

$promise = new Promise(function(Closure $resolve, Closure $reject){
    if(\random_int(1, 1000000) % 2 === 0){
        $resolve('Gerou um número par.');
    } else {
        $reject('Gerou um número impar.');
    }
});

$promise->then(function($data){
    echo 'Sucesso: ' . $data;
})->otherwise(function($reason){
    echo 'Falha: ' . $reason;
});

?>