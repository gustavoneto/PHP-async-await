<?php

require './vendor/autoload.php';

use React\Stream\ReadableResourceStream;

$loop = React\EventLoop\Factory::create();

$stream = new ReadableResourceStream(
    fopen('numeros.txt', 'rb'), $loop
);

$stream->on('data', function ($chunk) {
    echo "$chunk\n";
});

$stream->on('end', function () {
    echo 'Memória utilizada: ' . (memory_get_peak_usage(true)/1024/1024);
});

$loop->run();

?>