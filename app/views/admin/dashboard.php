<?php
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<section style="padding: 4rem 2rem;">
    <h1 style="text-align: center; font-size: 2rem; margin-bottom: 1rem;">
        Welcome, <?= htmlspecialchars($_SESSION['username']); ?> 👋
    </h1>
    <p style="text-align: center; margin-bottom: 3rem;">Manage your portfolio and content below:</p>

    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 2rem;
        max-width: 1000px;
        margin: 0 auto;
    ">
        <a href="?url=admin/manage_messages" class="dash-card">📬 Contact Messages</a>
        <a href="?url=admin/manage_projects" class="dash-card">📁 Projects</a>
        <a href="?url=admin/manage_blog" class="dash-card">📝 Blog Posts</a>
        <a href="?url=admin/manage_skills" class="dash-card">🛠️ Skills</a>
        <a href="?url=admin/manage_testimonials" class="dash-card">💬 Testimonials</a>
        <a href="?url=admin/manage_users" class="dash-card">🔐 Admin Users</a>
        <a href="?url=admin/logout" class="dash-card danger">🚪 Logout</a>
    </div>
</section>
