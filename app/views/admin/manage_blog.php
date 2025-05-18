<h2>Manage Blog Posts</h2>
<p><a href="?url=admin/add_blog">Add New Blog Post</a></p>

<?php if (!empty($posts)) : ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Title</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo htmlspecialchars($post->title); ?></td>
                <td><?php echo $post->created_at; ?></td>
                <td>
                    <a href="?url=admin/edit_blog/<?php echo $post->id; ?>">Edit</a> |
                    <a href="?url=admin/delete_blog/<?php echo $post->id; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>No blog posts found.</p>
<?php endif; ?>
