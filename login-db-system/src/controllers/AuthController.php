<?php

class AuthController {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function login($emailOrPhone, $password) {
        $query = "SELECT * FROM users WHERE (email = :emailOrPhone OR phone_number = :emailOrPhone) AND password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':emailOrPhone', $emailOrPhone);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // User authenticated successfully
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            // Authentication failed
            return false;
        }
    }

    public function logout() {
        // Logic for logging out the user
        session_start();
        session_unset();
        session_destroy();
    }
}