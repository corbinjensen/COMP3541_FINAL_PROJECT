<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/manage_testimonials" class="btn-secondary">← Back to Testimonials</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">➕ Add New Testimonial</h2>

    <form method="POST" enctype="multipart/form-data"
          style="max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

        <label>
            Author Name:
            <input type="text" name="author_name" required class="form-input">
        </label>

        <label>
            Upload Photo:
            <input type="file" name="photo" accept="image/*" class="form-file">
        </label>

        <label>
            Testimonial Content:
            <textarea name="content" rows="5" required class="form-textarea"></textarea>
        </label>

        <button type="submit" class="btn-primary">Add Testimonial</button>
    </form>
</section>
