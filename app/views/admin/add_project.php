<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/manage_projects" class="btn-secondary">← Back to Projects</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">➕ Add New Project</h2>

    <form method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

        <label>
            Title:
            <input type="text" name="title" required class="form-input">
        </label>

        <label>
            Category:
            <select name="category_id" required class="form-input">
                <option value="">-- Select Category --</option>
                <?php foreach ($categories as $cat): ?>
                    <option value="<?= $cat->id; ?>"><?= htmlspecialchars($cat->name); ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Description:
            <textarea name="description" rows="5" required class="form-textarea"></textarea>
        </label>

        <label>
            Tech Stack:
            <input type="text" name="tech_stack" placeholder="e.g., React, Node.js, MongoDB" class="form-input">
        </label>

        <label>
            Upload Image:
            <input type="file" name="image" accept="image/*" class="form-file">
        </label>

        <button type="submit" class="btn-primary">Add Project</button>
    </form>
</section>
