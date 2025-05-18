<!DOCTYPE html>
<html>
<head>
    <title>Corbin Jensen Portfolio</title>
    <link rel="stylesheet" href="/COMP3541_FINAL_PROJECT_CorbinJensen_T00660756/public/css/styles.css">
</head>
<body>
<nav>
    <a href="?url=home/index">Home</a>
    <a href="?url=projects/index">Projects</a>
    <a href="?url=blog/index">Blog</a>
    <a href="?url=about/index">About</a>
    <a href="?url=skills/index">Skills</a>
    <a href="?url=testimonials/index">Testimonials</a>
    <a href="?url=contact/index">Contact</a>

    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="?url=admin/dashboard">Dashboard</a>
        <a href="?url=admin/logout">Logout</a>
    <?php else: ?>
        <a href="?url=admin/login">Login</a>
    <?php endif; ?>
</nav>
<hr>
