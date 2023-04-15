<?php
header('Content-Type: application/json');
require_once 'logger.php';

class API
{
    private Logger $logger;
    private string $validUser = 'usuario';
    private string $validPassword = 'senha';

    public function __construct()
    {
        $this->logger = new Logger();
    }

    public function handleRequest(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->sendResponse(405, ['error' => 'Método não permitido']);
            exit;
        }

        if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
            header('WWW-Authenticate: Basic realm="Área restrita"');
            $this->sendResponse(401, ['error' => 'Autenticação requerida']);
            exit;
        }

        if ($_SERVER['PHP_AUTH_USER'] !== $this->validUser || $_SERVER['PHP_AUTH_PW'] !== $this->validPassword) {
            $this->sendResponse(403, ['error' => 'Acesso negado']);
            exit;
        }

        $data = ['message' => 'Requisição bem-sucedida'];
        $this->sendResponse(200, $data);
    }

    private function sendResponse(int $status_code, array $data): void
    {
        http_response_code($status_code);
        $response = json_encode($data);
        $this->logger->logRequest($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI'], $status_code, $response);
        echo $response;
    }
}