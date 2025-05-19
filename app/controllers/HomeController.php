<?php
class HomeController {
    public function index() {
        require_once __DIR__ . '/../models/Project.php';
        require_once __DIR__ . '/../models/Testimonial.php';
    
        $projectModel = new Project();
        $testimonialModel = new Testimonial();
    
        $featuredProjects = $projectModel->getFeaturedProjects(3);
        $testimonials = $testimonialModel->getRecent(3);
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/home/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    
}
