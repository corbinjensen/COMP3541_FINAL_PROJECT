<?php
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

<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section style="padding: 4rem 2rem; max-width: 400px; margin: 0 auto;">
    <h1 style="text-align: center; margin-bottom: 2rem;">Admin Login</h1>

    <?php if (!empty($error)): ?>
        <p style="color:red; text-align: center;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
        <label>
            Username
            <input type="text" name="username" required
                   style="padding: 0.75rem; border-radius: 8px; border: 1px solid #ccc; width: 100%;">
        </label>

        <label>
            Password
            <input type="password" name="password" required
                   style="padding: 0.75rem; border-radius: 8px; border: 1px solid #ccc; width: 100%;">
        </label>

        <button type="submit"
                style="background: #1e2a3b; color: white; padding: 0.75rem; border-radius: 30px;
                       border: none; font-weight: bold; cursor: pointer;">
            Login →
        </button>
    </form>
</section>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
