<?php
require_once __DIR__ . '/../core/Database.php';

class Skill {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllSkills() {
        $this->db->query("SELECT * FROM skills ORDER BY name ASC");
        return $this->db->resultSet();
    }

    public function addSkill($data) {
        $this->db->query("INSERT INTO skills (name, category, level) 
                          VALUES (:name, :category, :level)");
    
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':level', $data['level']);
    
        return $this->db->execute();
    }

    public function getSkillById($id) {
        $this->db->query("SELECT * FROM skills WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    public function updateSkill($data) {
        $this->db->query("UPDATE skills 
                          SET name = :name, category = :category, level = :level 
                          WHERE id = :id");
    
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':level', $data['level']);
        $this->db->bind(':id', $data['id']);
    
        return $this->db->execute();
    }
    
    public function deleteSkillById($id) {
        $this->db->query("DELETE FROM skills WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
}
