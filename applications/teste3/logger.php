<?php
require_once 'database.php';

class Logger {
    private PDO $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function logRequest(string $method, string $path, int $status_code, string $response): void {
        $stmt = $this->db->prepare("INSERT INTO logs (method, path, status_code, response) VALUES (:method, :path, :status_code, :response)");
        $stmt->bindParam(':method', $method);
        $stmt->bindParam(':path', $path);
        $stmt->bindParam(':status_code', $status_code);
        $stmt->bindParam(':response', $response);
        $stmt->execute();
    }
}