<?php

require './vendor/autoload.php';

use React\Promise\Deferred;

$deferred = new Deferred();

$deferred->promise()
    ->then(function ($data) {
        return "Olá, {$data}";
    })->then(function($data) {
        throw new RuntimeException("{$data}Web");
    })->otherwise(function(InvalidArgumentException $exception) {
        return strtoupper($exception->getMessage());
    })->otherwise(function(Exception $exception) {
        return strtolower($exception->getMessage());
    })->done(function($data) {
        echo "{$data}!\n";
    });

$deferred->resolve('Treina');

?>