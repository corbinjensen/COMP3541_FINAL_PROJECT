<?php
class AboutController {
    public function index() {
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/about/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
