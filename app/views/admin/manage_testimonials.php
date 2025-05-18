<h2>Manage Testimonials</h2>
<p><a href="?url=admin/add_testimonial">Add New Testimonial</a></p>

<?php if (!empty($testimonials)) : ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Author</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($testimonials as $t): ?>
            <tr>
                <td><?php echo htmlspecialchars($t->author_name); ?></td>
                <td><?php echo htmlspecialchars($t->content); ?></td>
                <td>
                    <a href="?url=admin/edit_testimonial/<?php echo $t->id; ?>">Edit</a> |
                    <a href="?url=admin/delete_testimonial/<?php echo $t->id; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>No testimonials found.</p>
<?php endif; ?>
