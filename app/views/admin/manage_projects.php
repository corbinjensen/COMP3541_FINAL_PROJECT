<h2>Manage Projects</h2>
<p><a href="?url=admin/add_project">Add New Project</a></p>
<a href="?url=admin/manage_categories">Manage Project Categories</a>

<?php if (!empty($projects)) : ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Title</th>
            <th>Tech Stack</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($projects as $p): ?>
            <tr>
                <td><?php echo htmlspecialchars($p->title); ?></td>
                <td><?php echo htmlspecialchars($p->tech_stack); ?></td>
                <td>
                    <a href="?url=admin/edit_project/<?php echo $p->id; ?>">Edit</a> |
                    <a href="?url=admin/delete_project/<?php echo $p->id; ?>" onclick="return confirm('Are you sure you want to delete this project?');">Delete</a>
                    </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>No projects found.</p>
<?php endif; ?>
