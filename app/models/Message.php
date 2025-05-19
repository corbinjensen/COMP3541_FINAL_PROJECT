<?php
require_once __DIR__ . '/../core/Database.php';

class Message {
    private $db;

    public function __construct() {
        require_once __DIR__ . '/../core/Database.php';
        $this->db = new Database();
    }

    public function add($data) {
        $this->db->query("INSERT INTO messages (name, email, message) 
                          VALUES (:name, :email, :message)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':message', $data['message']);
        return $this->db->execute();
    }

    public function getAll() {
        $this->db->query("SELECT * FROM messages ORDER BY created_at DESC");
        return $this->db->resultSet();
    }

    public function deleteById($id) {
        $this->db->query("DELETE FROM messages WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
}

