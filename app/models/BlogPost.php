<?php
require_once __DIR__ . '/../core/Database.php';

class BlogPost {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllPosts() {
        $this->db->query("SELECT * FROM blog_posts ORDER BY created_at DESC");
        return $this->db->resultSet();
    }

    public function addPost($data) {
        $this->db->query("INSERT INTO blog_posts (title, content, image) 
                          VALUES (:title, :content, :image)");
    
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':image', $data['image']);
    
        return $this->db->execute();
    }
    
    public function getPostById($id) {
        $this->db->query("SELECT * FROM blog_posts WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    public function updatePost($data) {
        $this->db->query("UPDATE blog_posts 
                          SET title = :title, content = :content, image = :image 
                          WHERE id = :id");
    
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':id', $data['id']);
    
        return $this->db->execute();
    }
    
    public function deletePostById($id) {
        $this->db->query("DELETE FROM blog_posts WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
}
