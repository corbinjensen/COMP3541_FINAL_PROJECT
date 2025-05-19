<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/dashboard" class="btn-secondary">← Back to Dashboard</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">🔐 Manage Admin Users</h2>

    <div style="max-width: 500px; margin: 0 auto; background: #f9f9f9; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
        <h3 style="margin-top: 0;">➕ Add New Admin</h3>
        <form method="POST" style="display: flex; flex-direction: column; gap: 1rem;">
            <input type="hidden" name="new_user" value="1">
            <label>
                Username:
                <input type="text" name="new_username" required style="width: 100%; padding: 0.5rem;">
            </label>
            <label>
                Password:
                <input type="password" name="new_user_password" required style="width: 100%; padding: 0.5rem;">
            </label>
            <button type="submit" class="btn-primary">Add User</button>
        </form>
    </div>

    <hr style="margin: 4rem 0;">

    <h3 style="text-align: center;">🔄 Change Passwords</h3>

    <?php if (!empty($users)) : ?>
        <div class="admin-table-wrapper" style="max-width: 900px; margin: 0 auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>New Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $u): ?>
                        <tr>
                            <td><?= htmlspecialchars($u->username); ?></td>
                            <td>
                                <form method="POST" style="display: flex; gap: 0.5rem; align-items: center;">
                                    <input type="hidden" name="change_password" value="1">
                                    <input type="hidden" name="user_id" value="<?= $u->id; ?>">
                                    <input type="password" name="new_password" required style="padding: 0.4rem; flex: 1;">
                                    <button type="submit" class="btn-small">Update</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p style="text-align: center;">No admin users found.</p>
    <?php endif; ?>
</section>
