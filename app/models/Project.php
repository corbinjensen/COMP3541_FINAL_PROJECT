<?php
require_once __DIR__ . '/../core/Database.php';

class Project {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllProjects() {
        $this->db->query("SELECT projects.*, categories.name AS category_name 
                          FROM projects 
                          LEFT JOIN categories ON projects.category_id = categories.id 
                          ORDER BY projects.created_at DESC");
        return $this->db->resultSet();
    }

    public function getFeaturedProjects($limit = 3) {
        $this->db->query("SELECT * FROM projects ORDER BY created_at DESC LIMIT :limit");
        $this->db->bind(':limit', $limit, PDO::PARAM_INT);
        return $this->db->resultSet();
    }
    
    
    
    
    public function getProjectsByCategory($categoryId) {
        $this->db->query("SELECT projects.*, categories.name AS category_name 
                          FROM projects 
                          LEFT JOIN categories ON projects.category_id = categories.id 
                          WHERE projects.category_id = :category_id 
                          ORDER BY projects.created_at DESC");
        $this->db->bind(':category_id', $categoryId);
        return $this->db->resultSet();
    }
    
    

    public function addProject($data) {
        $this->db->query("INSERT INTO projects 
            (title, category_id, description, tech_stack, image) 
            VALUES (:title, :category_id, :description, :tech_stack, :image)");
    
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':tech_stack', $data['tech_stack']);
        $this->db->bind(':image', $data['image']);
    
        return $this->db->execute();
    }
    
    

    public function getProjectById($id) {
        $this->db->query("SELECT * FROM projects WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    public function updateProject($data) {
        $this->db->query("UPDATE projects 
            SET title = :title, category_id = :category_id, description = :description, 
                tech_stack = :tech_stack, image = :image 
            WHERE id = :id");
    
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':tech_stack', $data['tech_stack']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':id', $data['id']);
    
        return $this->db->execute();
    }
    
    

    public function deleteProjectById($id) {
        $this->db->query("DELETE FROM projects WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
    
    
    
}
