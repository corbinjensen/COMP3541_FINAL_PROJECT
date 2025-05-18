<?php
class AdminController {
    public function login() {
        require_once __DIR__ . '/../views/admin/login.php';
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ?url=admin/login");
        exit;
    }
    
    public function index() {
        header("Location: ?url=admin/dashboard");
        exit;
    }    

    public function dashboard() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/dashboard.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    
    public function manage_projects() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Project.php';
        $model = new Project();
        $projects = $model->getAllProjects();
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/manage_projects.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function add_project() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Category.php';
        $categoryModel = new Category();
        $categories = $categoryModel->getAll();  // ← Load all categories
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../models/Project.php';
            $projectModel = new Project();
    
            $filename = null;
            if (!empty($_FILES['image']['name'])) {
                $targetDir = __DIR__ . '/../../public/uploads/';
                $filename = basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $filename);
            }
    
            $data = [
                'title' => $_POST['title'],
                'category_id' => $_POST['category_id'],
                'description' => $_POST['description'],
                'tech_stack' => $_POST['tech_stack'],
                'image' => $filename
            ];
    
            $projectModel->addProject($data);
            header("Location: ?url=admin/manage_projects");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/add_project.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    
    
    
    public function edit_project($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Project.php';
        require_once __DIR__ . '/../models/Category.php';
    
        $projectModel = new Project();
        $categoryModel = new Category();
        $categories = $categoryModel->getAll(); // ← Load categories for dropdown
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid project ID.</p>";
            return;
        }
    
        $project = $projectModel->getProjectById($id);
    
        if (!$project) {
            echo "<p>Project not found.</p>";
            return;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $filename = $project->image;
    
            if (!empty($_FILES['image']['name'])) {
                $targetDir = __DIR__ . '/../../public/uploads/';
                $filename = basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $filename);
            }
    
            $data = [
                'id' => $id,
                'title' => $_POST['title'],
                'category_id' => $_POST['category_id'],
                'description' => $_POST['description'],
                'tech_stack' => $_POST['tech_stack'],
                'image' => $filename
            ];
    
            $projectModel->updateProject($data);
            header("Location: ?url=admin/manage_projects");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/edit_project.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    
    
    

    public function delete_project($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid project ID.</p>";
            return;
        }
    
        require_once __DIR__ . '/../models/Project.php';
        $projectModel = new Project();
        $projectModel->deleteProjectById($id);
    
        header("Location: ?url=admin/manage_projects");
        exit;
    }

    public function manage_categories() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Category.php';
        $categoryModel = new Category();
    
        // Handle new category creation
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_category'])) {
            $categoryModel->add(trim($_POST['new_category']));
            header("Location: ?url=admin/manage_categories");
            exit;
        }
    
        // Handle delete (GET with confirm)
        if (isset($_GET['delete'])) {
            $categoryModel->delete((int)$_GET['delete']);
            header("Location: ?url=admin/manage_categories");
            exit;
        }
    
        $categories = $categoryModel->getAll();
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/manage_categories.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    

    public function manage_blog() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/BlogPost.php';
        $model = new BlogPost();
        $posts = $model->getAllPosts();
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/manage_blog.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function add_blog() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../models/BlogPost.php';
            $blogModel = new BlogPost();
    
            $filename = null;
    
            if (!empty($_FILES['image']['name'])) {
                $targetDir = __DIR__ . '/../../public/uploads/';
                $filename = basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $filename);
            }
    
            $data = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'image' => $filename
            ];
    
            $blogModel->addPost($data);
            header("Location: ?url=admin/manage_blog");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/add_blog.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    
    public function edit_blog($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/BlogPost.php';
        $blogModel = new BlogPost();
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid blog post ID.</p>";
            return;
        }
    
        $post = $blogModel->getPostById($id);
    
        if (!$post) {
            echo "<p>Blog post not found.</p>";
            return;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $filename = $post->image; // default to existing image
    
            if (!empty($_FILES['image']['name'])) {
                $targetDir = __DIR__ . '/../../public/uploads/';
                $filename = basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $filename);
            }
    
            $data = [
                'id' => $id,
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'image' => $filename
            ];
    
            $blogModel->updatePost($data);
            header("Location: ?url=admin/manage_blog");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/edit_blog.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    

    public function delete_blog($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid blog post ID.</p>";
            return;
        }
    
        require_once __DIR__ . '/../models/BlogPost.php';
        $blogModel = new BlogPost();
        $blogModel->deletePostById($id);
    
        header("Location: ?url=admin/manage_blog");
        exit;
    }
    
    public function manage_skills() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Skill.php';
        $model = new Skill();
        $skills = $model->getAllSkills();
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/manage_skills.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    
    public function add_skill() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../models/Skill.php';
            $skillModel = new Skill();
    
            $data = [
                'name' => $_POST['name'],
                'category' => $_POST['category'],
                'level' => $_POST['level'],
            ];
    
            $skillModel->addSkill($data);
            header("Location: ?url=admin/manage_skills");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/add_skill.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function edit_skill($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Skill.php';
        $skillModel = new Skill();
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid skill ID.</p>";
            return;
        }
    
        $skill = $skillModel->getSkillById($id);
    
        if (!$skill) {
            echo "<p>Skill not found.</p>";
            return;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $id,
                'name' => $_POST['name'],
                'category' => $_POST['category'],
                'level' => $_POST['level'],
            ];
    
            $skillModel->updateSkill($data);
            header("Location: ?url=admin/manage_skills");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/edit_skill.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function delete_skill($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid skill ID.</p>";
            return;
        }
    
        require_once __DIR__ . '/../models/Skill.php';
        $skillModel = new Skill();
        $skillModel->deleteSkillById($id);
    
        header("Location: ?url=admin/manage_skills");
        exit;
    }
 
    public function manage_testimonials() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Testimonial.php';
        $model = new Testimonial();
        $testimonials = $model->getAllTestimonials();
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/manage_testimonials.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function add_testimonial() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../models/Testimonial.php';
            $testimonialModel = new Testimonial();
    
            $data = [
                'author_name' => $_POST['author_name'],
                'content' => $_POST['content']
            ];
    
            $testimonialModel->addTestimonial($data);
            header("Location: ?url=admin/manage_testimonials");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/add_testimonial.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    
    public function edit_testimonial($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Testimonial.php';
        $testimonialModel = new Testimonial();
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid testimonial ID.</p>";
            return;
        }
    
        $testimonial = $testimonialModel->getTestimonialById($id);
    
        if (!$testimonial) {
            echo "<p>Testimonial not found.</p>";
            return;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $id,
                'author_name' => $_POST['author_name'],
                'content' => $_POST['content']
            ];
    
            $testimonialModel->updateTestimonial($data);
            header("Location: ?url=admin/manage_testimonials");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/edit_testimonial.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function delete_testimonial($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid testimonial ID.</p>";
            return;
        }
    
        require_once __DIR__ . '/../models/Testimonial.php';
        $testimonialModel = new Testimonial();
        $testimonialModel->deleteTestimonialById($id);
    
        header("Location: ?url=admin/manage_testimonials");
        exit;
    }
    
    public function manage_messages() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        require_once __DIR__ . '/../models/Message.php';
        $model = new Message();
        $messages = $model->getAll();
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/admin/manage_messages.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }   
    
    public function delete_message($id = null) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?url=admin/login");
            exit;
        }
    
        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid message ID.</p>";
            return;
        }
    
        require_once __DIR__ . '/../models/Message.php';
        $messageModel = new Message();
        $messageModel->deleteById($id);
    
        header("Location: ?url=admin/manage_messages");
        exit;
    }
    
    
}
