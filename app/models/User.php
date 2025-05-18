<?php
require_once __DIR__ . '/../core/Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function findByUsername($username) {
        $this->db->query("SELECT * FROM users WHERE username = :username");
        $this->db->bind(':username', $username);
        return $this->db->single();
    }
}
