<h2>Manage Project Categories</h2>

<form method="POST">
    <label>Add New Category:</label>
    <input type="text" name="new_category" required>
    <button type="submit">Add</button>
</form>

<br><hr><br>

<?php if (!empty($categories)) : ?>
    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($categories as $cat): ?>
            <tr>
                <td><?php echo $cat->id; ?></td>
                <td><?php echo htmlspecialchars($cat->name); ?></td>
                <td>
                    <a href="?url=admin/manage_categories&delete=<?php echo $cat->id; ?>"
                       onclick="return confirm('Delete this category?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>No categories found.</p>
<?php endif; ?>
