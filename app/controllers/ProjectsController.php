<?php
class ProjectsController {
    public function index() {
        require_once __DIR__ . '/../models/Project.php';
        require_once __DIR__ . '/../models/Category.php';

        $projectModel = new Project();
        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        $selectedCategoryId = $_GET['category_id'] ?? null;
        $selectedCategoryName = null;

        if ($selectedCategoryId && is_numeric($selectedCategoryId)) {
            $projects = $projectModel->getProjectsByCategory($selectedCategoryId);

            // Get selected category name
            foreach ($categories as $cat) {
                if ($cat->id == $selectedCategoryId) {
                    $selectedCategoryName = $cat->name;
                    break;
                }
            }
        } else {
            $projects = $projectModel->getAllProjects();
        }

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/projects/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }

    public function view($id = null) {
        require_once __DIR__ . '/../models/Project.php';
        $projectModel = new Project();

        if ($id === null || !is_numeric($id)) {
            echo "<p>Invalid project ID.</p>";
            return;
        }

        $project = $projectModel->getProjectById($id);

        if (!$project) {
            echo "<p>Project not found.</p>";
            return;
        }

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/projects/view.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
