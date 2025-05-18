<?php
require_once __DIR__ . '/../core/Database.php';

class Testimonial {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllTestimonials() {
        $this->db->query("SELECT * FROM testimonials ORDER BY created_at DESC");
        return $this->db->resultSet();
    }

    public function addTestimonial($data) {
        $this->db->query("INSERT INTO testimonials (author_name, content) 
                          VALUES (:author_name, :content)");
    
        $this->db->bind(':author_name', $data['author_name']);
        $this->db->bind(':content', $data['content']);
    
        return $this->db->execute();
    }

    public function getTestimonialById($id) {
        $this->db->query("SELECT * FROM testimonials WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    public function updateTestimonial($data) {
        $this->db->query("UPDATE testimonials 
                          SET author_name = :author_name, content = :content 
                          WHERE id = :id");
    
        $this->db->bind(':author_name', $data['author_name']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':id', $data['id']);
    
        return $this->db->execute();
    }

    public function deleteTestimonialById($id) {
        $this->db->query("DELETE FROM testimonials WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
    
    
}
