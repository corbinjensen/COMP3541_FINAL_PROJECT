<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/manage_projects" class="btn-secondary">← Back to Projects</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">🗂️ Manage Project Categories</h2>

    <form method="POST" style="max-width: 500px; margin: 0 auto 3rem auto; display: flex; gap: 1rem; align-items: center;">
        <input type="text" name="new_category" placeholder="New category name" required class="form-input" style="flex: 1;">
        <button type="submit" class="btn-primary">Add</button>
    </form>

    <?php if (!empty($categories)) : ?>
        <div class="admin-table-wrapper" style="max-width: 600px; margin: 0 auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $cat): ?>
                        <tr>
                            <td><?= $cat->id; ?></td>
                            <td><?= htmlspecialchars($cat->name); ?></td>
                            <td>
                                <a href="?url=admin/manage_categories&delete=<?= $cat->id; ?>" 
                                   onclick="return confirm('Delete this category?');"
                                   class="btn-small danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <p style="text-align: center;">No categories found.</p>
    <?php endif; ?>
</section>
