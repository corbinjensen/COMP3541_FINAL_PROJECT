<?php
class BlogController {
    public function index() {
        require_once __DIR__ . '/../models/BlogPost.php';
        $blogModel = new BlogPost();
        $posts = $blogModel->getAllPosts();

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/blog/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function view($id = null) {
        require_once __DIR__ . '/../models/BlogPost.php';
        $blogModel = new BlogPost();

        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid blog post.</p>";
            return;
        }

        $post = $blogModel->getPostById($id);

        if (!$post) {
            echo "<p>Blog post not found.</p>";
            return;
        }

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/blog/post.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
