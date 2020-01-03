<?php

require './vendor/autoload.php';

/*use Clue\React\Buzz\Browser;
use React\EventLoop\Factory;
use Psr\Http\Message\ResponseInterface;

$browser = new Browser(
    $loop = Factory::create()
);

$ceps = [
    '01311200', // Bela Vista
    '70630904', // Setor Militar Urbano
    '70165900', // Zona Cívico-Administrativa
    '32685888', // Erro, cep não existe.
];

foreach ($ceps as $cep) {
    $browser->get("https://api.postmon.com.br/v1/cep/{$cep}")
        ->then(function (ResponseInterface $response) {
            $endereco = \json_decode($response->getBody());

            echo $endereco->bairro . PHP_EOL;
        })
        ->otherwise(function (\Exception $exception) use ($cep) {
            echo 'Erro no CEP: ' . $cep . PHP_EOL;
        });
}

$loop->run();*/

$url = "http://viacep.com.br/ws/38300062/json";

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method' => 'POST'
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$jsonObj = json_decode($url, true);

?>