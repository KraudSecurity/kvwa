<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'PUT':
        http_response_code(403);
        break;
    case 'POST':
        http_response_code(403);
        break;
    case 'GET':
        http_response_code(403);
        break;
    default:
        echo "<h1>ADMIN LOGIN!!!!!</h1>";
        break;
}