<?php
class ContactController {
    public function index() {
        $success = false;
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);
    
            if ($name && $email && $message) {
                require_once __DIR__ . '/../models/Message.php';
                $model = new Message();
    
                $model->save([
                    'name' => $name,
                    'email' => $email,
                    'message' => $message
                ]);
    
                $success = true;
            }
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/contact/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }    
}
