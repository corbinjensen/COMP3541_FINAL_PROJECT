<h2>Edit Testimonial</h2>

<form method="POST">
    <label>Author Name:<br>
        <input type="text" name="author_name" value="<?php echo htmlspecialchars($testimonial->author_name); ?>" required>
    </label><br><br>

    <label>Testimonial Content:<br>
        <textarea name="content" rows="5" required><?php echo htmlspecialchars($testimonial->content); ?></textarea>
    </label><br><br>

    <button type="submit">Update Testimonial</button>
</form>
