<?php

require './vendor/autoload.php';

use React\Promise\Deferred;

$deferred = new Deferred();
$promise = $deferred->promise();

$promise
    ->then(function($data) {
        echo 'Resultado: ' . $data;
    })
    ->otherwise(function($reason) {
    echo "Motivo da falha: " . $reason;
});

$deferred->resolve("Erro interno!\n");

?>