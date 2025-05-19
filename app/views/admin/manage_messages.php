<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/dashboard" class="btn-secondary">← Back to Dashboard</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">📬 Submitted Contact Messages</h2>

    <?php if (!empty($messages)) : ?>
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $msg): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($msg->name); ?></td>
                            <td><?php echo htmlspecialchars($msg->email); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($msg->message)); ?></td>
                            <td><?php echo $msg->created_at; ?></td>
                            <td>
                                <a href="?url=admin/delete_message/<?php echo $msg->id; ?>"
                                   onclick="return confirm('Delete this message?');"
                                   class="btn-small danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p style="text-align: center;">No messages received yet.</p>
    <?php endif; ?>
</section>
