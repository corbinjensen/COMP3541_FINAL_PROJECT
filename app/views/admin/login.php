<?php
session_start();
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../app/models/User.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userModel = new User();
    $user = $userModel->findByUsername($_POST['username']);

    if ($user && password_verify($_POST['password'], $user->password)) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        header('Location: ?url=admin/dashboard');
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
}
?>

<h2>Admin Login</h2>

<?php if ($error): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="POST">
    <label>Username:<br>
        <input type="text" name="username" required>
    </label><br><br>

    <label>Password:<br>
        <input type="password" name="password" required>
    </label><br><br>

    <button type="submit">Login</button>
</form>
