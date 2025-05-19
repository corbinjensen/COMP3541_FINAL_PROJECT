<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/dashboard" class="btn-secondary">← Back to Dashboard</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">📝 Manage Blog Posts</h2>

    <div style="text-align: center; margin-bottom: 2rem;">
        <a href="?url=admin/add_blog" class="btn-primary">➕ Add New Blog Post</a>
    </div>

    <?php if (!empty($posts)) : ?>
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?= htmlspecialchars($post->title); ?></td>
                            <td><?= $post->created_at; ?></td>
                            <td>
                                <a href="?url=admin/edit_blog/<?= $post->id; ?>" class="btn-small">Edit</a>
                                <a href="?url=admin/delete_blog/<?= $post->id; ?>" 
                                   onclick="return confirm('Are you sure?');" 
                                   class="btn-small danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <p style="text-align: center;">No blog posts found.</p>
    <?php endif; ?>
</section>
