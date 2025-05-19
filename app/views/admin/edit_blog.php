<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/manage_blog" class="btn-secondary">← Back to Blog</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">✏️ Edit Blog Post</h2>

    <form method="POST" enctype="multipart/form-data"
          style="max-width: 700px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

        <label>
            Title:
            <input type="text" name="title" value="<?= htmlspecialchars($post->title); ?>" required class="form-input">
        </label>

        <label>
            Content:
            <textarea name="content" rows="8" required class="form-textarea"><?= htmlspecialchars($post->content); ?></textarea>
        </label>

        <?php if (!empty($post->image)): ?>
            <div>
                <p>Current Image:</p>
                <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($post->image); ?>" 
                     alt="Current Image" style="max-width: 300px; border-radius: 8px;">
            </div>
        <?php endif; ?>

        <label>
            Replace Image (optional):
            <input type="file" name="image" accept="image/*" class="form-file">
        </label>

        <button type="submit" class="btn-primary">Update Post</button>
    </form>
</section>
