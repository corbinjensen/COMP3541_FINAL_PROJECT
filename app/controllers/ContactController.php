<?php
class ContactController {
    public function index() {
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../models/Message.php';
            $msg = new Message();
    
            $msg->add([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'message' => $_POST['message']
            ]);
    
            $_SESSION['contact_success'] = "Thanks! Your message has been received.";
            header("Location: ?url=contact/index");
            exit;
        }
    
        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/contact/index.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
    
}
