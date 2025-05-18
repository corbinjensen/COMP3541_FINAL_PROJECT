<?php
require_once __DIR__ . '/../core/Database.php';

class Category {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $this->db->query("SELECT * FROM categories ORDER BY name ASC");
        return $this->db->resultSet();
    }

    public function add($name) {
        $this->db->query("INSERT IGNORE INTO categories (name) VALUES (:name)");
        $this->db->bind(':name', $name);
        return $this->db->execute();
    }
    
    public function delete($id) {
        $this->db->query("DELETE FROM categories WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
}
