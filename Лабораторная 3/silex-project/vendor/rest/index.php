<?php

require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 3\silex-project\vendor\autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

// Middleware для обработки CORS
$app->after(function (Request $request, Response $response) {
    // Разрешить доступ с любых источников (*)
    $response->headers->set('Access-Control-Allow-Origin', '*');
    // Разрешить использование любых методов запросов
    $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    // Разрешить отправку заголовков авторизации и других пользовательских заголовков
    $response->headers->set('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization');
});

$app->get('/', function() use ($app) {
    // Здесь можно выполнить любую логику для получения данных
    $data = ['message' => 'Hello from Silex API!'];

    return $app->json($data);
});

$app->run();
?>
