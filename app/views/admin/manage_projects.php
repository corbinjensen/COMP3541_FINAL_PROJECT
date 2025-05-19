<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/dashboard" class="btn-secondary">← Back to Dashboard</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">📁 Manage Projects</h2>

    <div style="text-align: center; margin-bottom: 2rem;">
        <a href="?url=admin/add_project" class="btn-secondary">➕ Add New Project</a>
        <a href="?url=admin/manage_categories" class="btn-secondary" style="margin-left: 1rem;">🗂️ Manage Categories</a>
    </div>

    <?php if (!empty($projects)) : ?>
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Tech Stack</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $p): ?>
                        <tr>
                            <td><?= htmlspecialchars($p->title); ?></td>
                            <td><?= htmlspecialchars($p->tech_stack); ?></td>
                            <td>
                                <a href="?url=admin/edit_project/<?= $p->id; ?>" class="btn-small">Edit</a>
                                <a href="?url=admin/delete_project/<?= $p->id; ?>" 
                                   onclick="return confirm('Are you sure you want to delete this project?');" 
                                   class="btn-small danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <p style="text-align: center;">No projects found.</p>
    <?php endif; ?>
</section>
