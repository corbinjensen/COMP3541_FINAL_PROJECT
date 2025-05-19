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

    public function getAll() {
        $this->db->query("SELECT id, username FROM users ORDER BY username ASC");
        return $this->db->resultSet();
    }
    
    public function add($username, $password) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $this->db->query("INSERT INTO users (username, password) VALUES (:username, :password)");
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $hashed);
        return $this->db->execute();
    }
    
    public function updatePassword($id, $newPassword) {
        $hashed = password_hash($newPassword, PASSWORD_DEFAULT);
        $this->db->query("UPDATE users SET password = :password WHERE id = :id");
        $this->db->bind(':password', $hashed);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
}
