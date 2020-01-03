<?php

require './vendor/autoload.php';

use React\Filesystem\Filesystem;

$loop = React\EventLoop\Factory::create();
$filesystem = Filesystem::create($loop);

$filesystem->file('numeros.txt')->open('rb')->then(function($stream) {
    $stream->on('data', function ($chunk) {
        // echo "$chunk\n";
    });

    $stream->on('end', function() {
        echo 'Memória utilizada: ' . (memory_get_peak_usage(true)/1024/1024);
    });
});

$loop->run();

?>