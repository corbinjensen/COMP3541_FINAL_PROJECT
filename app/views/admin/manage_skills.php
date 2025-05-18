<h2>Manage Skills</h2>
<p><a href="?url=admin/add_skill">Add New Skill</a></p>

<?php if (!empty($skills)) : ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Level</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($skills as $skill): ?>
            <tr>
                <td><?php echo htmlspecialchars($skill->name); ?></td>
                <td><?php echo htmlspecialchars($skill->category); ?></td>
                <td><?php echo htmlspecialchars($skill->level); ?></td>
                <td>
                    <a href="?url=admin/edit_skill/<?php echo $skill->id; ?>">Edit</a> |
                    <a href="?url=admin/delete_skill/<?php echo $skill->id; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>No skills found.</p>
<?php endif; ?>
