<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

/**
 * 官方地址：http://socketo.me/docs/hello-world
 * 使用：
 * 1、安装依赖：composer install
 * 2、运行服务端： php index.php
 * 3、测试，打开多个浏览器，查看console。
 * */

require __DIR__ . '/vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8080
);

$server->run();