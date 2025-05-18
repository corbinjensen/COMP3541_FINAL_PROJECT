<?php
require_once __DIR__ . '/../models/Testimonial.php';

class TestimonialsController {
    public function index() {
        $model = new Testimonial();
        $testimonials = $model->getAllTestimonials();

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/testimonials/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
