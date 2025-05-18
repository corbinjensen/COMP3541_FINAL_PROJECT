<h2>Submitted Contact Messages</h2>

<?php if (!empty($messages)) : ?>
    <table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Submitted At</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($messages as $msg): ?>
        <tr>
            <td><?php echo htmlspecialchars($msg->name); ?></td>
            <td><?php echo htmlspecialchars($msg->email); ?></td>
            <td><?php echo nl2br(htmlspecialchars($msg->message)); ?></td>
            <td><?php echo $msg->created_at; ?></td>
            <td>
                <a href="?url=admin/delete_message/<?php echo $msg->id; ?>" onclick="return confirm('Delete this message?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else: ?>
    <p>No messages received yet.</p>
<?php endif; ?>
