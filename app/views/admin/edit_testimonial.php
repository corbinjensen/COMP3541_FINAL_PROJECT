<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/manage_testimonials" class="btn-secondary">← Back to Testimonials</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">✏️ Edit Testimonial</h2>

    <form method="POST" enctype="multipart/form-data"
          style="max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

        <label>
            Author Name:
            <input type="text" name="author_name" value="<?= htmlspecialchars($testimonial->author_name); ?>" required class="form-input">
        </label>

        <?php if (!empty($testimonial->photo)): ?>
            <div>
                <p>Current Photo:</p>
                <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($testimonial->photo); ?>" 
                     alt="Photo" style="max-width: 150px; border-radius: 8px;">
            </div>
        <?php endif; ?>

        <label>
            Replace Photo:
            <input type="file" name="photo" accept="image/*" class="form-file">
        </label>

        <label>
            Testimonial Content:
            <textarea name="content" rows="5" required class="form-textarea"><?= htmlspecialchars($testimonial->content); ?></textarea>
        </label>

        <button type="submit" class="btn-primary">Update Testimonial</button>
    </form>
</section>
