<?php
require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 3\silex-project\vendor\autoload.php';
require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 3\silex-project\vendor\rest\logic.php'; 

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

// Middleware для обработки CORS
$app->after(function (Request $request, Response $response) {
    // Разрешить доступ с определенного источника
    $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:8080');
    // Разрешить использование любых методов запросов
    $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    // Разрешить отправку заголовков авторизации и других пользовательских заголовков
    $response->headers->set('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization');
    // Для CORS запроса OPTIONS также установим заголовок Allow-Control-Allow-Credentials
    if ($request->getMethod() == 'OPTIONS') {
        $response->headers->set('Access-Control-Allow-Credentials', 'true');
    }
});

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "lb-1"; 
$database = new Database($host, $user, $password, $dbname);

// Маршрут для получения списка студентов
$app->get('/', function() use ($database) {
    $students = $database->getGroups();
    return json_encode($students);
});

// Маршрут для удаления студента по ID
$app->delete('/{id}', function ($id, Request $request) use ($database) {
    if ($request->getMethod() === 'DELETE') {
        $database->deleteGroup($id);
        return new Response("Student with ID $id successfully deleted", 200);
    } else {
        return new Response("Method Not Allowed", 405);
    }
});

// добавляем обработку CORS для запросов DELETE
$app->options('/{id}', function ($id, Request $request) use ($app) {
    return '';
});
$app->run();
?>
