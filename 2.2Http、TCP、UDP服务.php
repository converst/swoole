<?php

//$http = new Swoole\Http\Server('0.0.0.0', 9501);
//
//$http->on('Request', function ($request, $response) {
//    echo "接收到了请求", PHP_EOL;
//
//    var_dump($request);
//    var_dump($_REQUEST);
//    var_dump($_SERVER);
//
//    $response->header('Content-Type', 'text/html; charset=utf-8');
//    $response->end('<h1>Hello Swoole .#</h1>');
//});
//
//echo "启动服务" . PHP_EOL;
//$http->start();

$http = new Swoole\Http\Server('0.0.0.0', 9501);

$i = 1;

$http->set([
    'worker_num' => 2
]);

$http->on('Request', function ($request, $response) {
    global $i;
    $response->end($i++);
});

$http->start();