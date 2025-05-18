<h2>Edit Blog Post</h2>

<form method="POST" enctype="multipart/form-data">
    <label>Title:<br>
        <input type="text" name="title" value="<?php echo htmlspecialchars($post->title); ?>" required>
    </label><br><br>

    <label>Content:<br>
        <textarea name="content" rows="8" required><?php echo htmlspecialchars($post->content); ?></textarea>
    </label><br><br>

    <?php if (!empty($post->image)): ?>
        <p>Current Image:<br>
            <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($post->image); ?>" 
                 alt="Current Image" style="max-width: 300px;"><br><br>
        </p>
    <?php endif; ?>

    <label>Replace Image (optional):<br>
        <input type="file" name="image" accept="image/*">
    </label><br><br>

    <button type="submit">Update Post</button>
</form>
