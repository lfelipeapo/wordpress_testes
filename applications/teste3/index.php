<?php
require_once 'logger.php';
require_once 'api.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestURI = $_SERVER['REQUEST_URI'];

$api = new API();
$logger = new Logger();

if (preg_match('/^\/$/', $requestURI)) {
    http_response_code(200);
    $response = json_encode(['message' => 'API funcionando']);
    $logger->logRequest($requestMethod, $requestURI, 200, $response);
    echo $response;
} elseif (preg_match('/^\/data$/', $requestURI)) {
    $api->handleRequest();
} else {
    http_response_code(404);
    $response = json_encode(['error' => 'Rota não encontrada']);
    $logger->logRequest($requestMethod, $requestURI, 404, $response);
    echo $response;
}