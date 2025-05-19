<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/dashboard" class="btn-secondary">← Back to Dashboard</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">🛠️ Manage Skills</h2>

    <div style="text-align: center; margin-bottom: 2rem;">
        <a href="?url=admin/add_skill" class="btn-primary">➕ Add New Skill</a>
    </div>

    <?php if (!empty($skills)) : ?>
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($skills as $skill): ?>
                        <tr>
                            <td><?= htmlspecialchars($skill->name); ?></td>
                            <td><?= htmlspecialchars($skill->category); ?></td>
                            <td><?= htmlspecialchars($skill->level); ?></td>
                            <td>
                                <a href="?url=admin/edit_skill/<?= $skill->id; ?>" class="btn-small">Edit</a>
                                <a href="?url=admin/delete_skill/<?= $skill->id; ?>" 
                                   onclick="return confirm('Are you sure?');" 
                                   class="btn-small danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <p style="text-align: center;">No skills found.</p>
    <?php endif; ?>
</section>
