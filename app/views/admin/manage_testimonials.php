<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/dashboard" class="btn-secondary">← Back to Dashboard</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">💬 Manage Testimonials</h2>

    <div style="text-align: center; margin-bottom: 2rem;">
        <a href="?url=admin/add_testimonial" class="btn-primary">➕ Add New Testimonial</a>
    </div>

    <?php if (!empty($testimonials)) : ?>
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Author</th>
                        <th>Content</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($testimonials as $t): ?>
                        <tr>
                            <td><?= htmlspecialchars($t->author_name); ?></td>
                            <td><?= nl2br(htmlspecialchars($t->content)); ?></td>
                            <td>
                                <?php if (!empty($t->photo)): ?>
                                    <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($t->photo); ?>" alt="Photo" style="width: 50px; border-radius: 50%;">
                                <?php else: ?>
                                    —
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="?url=admin/edit_testimonial/<?= $t->id; ?>" class="btn-small">Edit</a>
                                <a href="?url=admin/delete_testimonial/<?= $t->id; ?>" 
                                   onclick="return confirm('Are you sure?');" 
                                   class="btn-small danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <p style="text-align: center;">No testimonials found.</p>
    <?php endif; ?>
</section>
