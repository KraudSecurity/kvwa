<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'PUT':
        header('HTTP/1.1 401 Unauthorized');
        break;
    case 'POST':
        header('HTTP/1.1 401 Unauthorized');
        break;
    case 'GET':
        header('HTTP/1.1 401 Unauthorized');
        break;
    default:
        echo "<h1>ADMIN LOGIN!!!!!</h1>";
        break;
}