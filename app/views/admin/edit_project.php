Here’s your fully styled and modernized **Edit Project** form:

```php
<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/manage_projects" class="btn-secondary">← Back to Projects</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">✏️ Edit Project</h2>

    <form method="POST" enctype="multipart/form-data"
          style="max-width: 700px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

        <label>
            Title:
            <input type="text" name="title" value="<?= htmlspecialchars($project->title); ?>" required class="form-input">
        </label>

        <label>
            Category:
            <select name="category_id" required class="form-input">
                <option value="">-- Select Category --</option>
                <?php foreach ($categories as $cat): ?>
                    <option value="<?= $cat->id; ?>" <?= ($project->category_id == $cat->id ? 'selected' : ''); ?>>
                        <?= htmlspecialchars($cat->name); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Description:
            <textarea name="description" rows="5" required class="form-textarea"><?= htmlspecialchars($project->description); ?></textarea>
        </label>

        <label>
            Tech Stack:
            <input type="text" name="tech_stack" value="<?= htmlspecialchars($project->tech_stack); ?>" class="form-input">
        </label>

        <?php if (!empty($project->image)): ?>
            <div>
                <p>Current Image:</p>
                <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($project->image); ?>"
                     alt="Current Image" style="max-width: 300px; border-radius: 8px;">
            </div>
        <?php endif; ?>

        <label>
            Replace Image (optional):
            <input type="file" name="image" accept="image/*" class="form-file">
        </label>

        <button type="submit" class="btn-primary">Update Project</button>
    </form>
</section>
```
