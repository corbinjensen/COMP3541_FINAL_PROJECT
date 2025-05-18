<h2>Add New Project</h2>

<form method="POST" enctype="multipart/form-data">
    <label>Title:<br>
        <input type="text" name="title" required>
    </label><br><br>

    <label>Category:<br>
        <select name="category_id" required>
            <option value="">-- Select Category --</option>
            <?php foreach ($categories as $cat): ?>
                <option value="<?php echo $cat->id; ?>"><?php echo htmlspecialchars($cat->name); ?></option>
            <?php endforeach; ?>
        </select>
    </label><br><br>

    <label>Description:<br>
        <textarea name="description" rows="4" required></textarea>
    </label><br><br>

    <label>Tech Stack:<br>
        <input type="text" name="tech_stack">
    </label><br><br>

    <label>Upload Image:<br>
        <input type="file" name="image" accept="image/*">
    </label><br><br>

    <button type="submit">Add Project</button>
</form>
