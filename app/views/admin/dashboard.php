<?php
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

<p>Use the links below to manage your site content:</p>

<ul>
    <li><a href="?url=admin/manage_messages">View Contact Messages</a></li>
    <li><a href="?url=admin/manage_projects">Manage Projects</a></li>
    <li><a href="?url=admin/manage_blog">Manage Blog Posts</a></li>
    <li><a href="?url=admin/manage_skills">Manage Skills</a></li>
    <li><a href="?url=admin/manage_testimonials">Manage Testimonials</a></li>
    <li><a href="?url=admin/logout">Logout</a></li>
</ul>
