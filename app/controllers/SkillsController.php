<?php
require_once __DIR__ . '/../models/Skill.php';

class SkillsController {
    public function index() {
        $model = new Skill();
        $skills = $model->getAllSkills();

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/skills/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
