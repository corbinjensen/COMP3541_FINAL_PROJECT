<h2>Edit Project</h2>

<form method="POST" enctype="multipart/form-data">
    <label>Title:<br>
        <input type="text" name="title" value="<?php echo htmlspecialchars($project->title); ?>" required>
    </label><br><br>

    <label>Category:<br>
        <select name="category_id" required>
            <option value="">-- Select Category --</option>
            <?php foreach ($categories as $cat): ?>
                <option value="<?php echo $cat->id; ?>" <?php if ($project->category_id == $cat->id) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($cat->name); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label><br><br>

    <label>Description:<br>
        <textarea name="description" rows="4" required><?php echo htmlspecialchars($project->description); ?></textarea>
    </label><br><br>

    <label>Tech Stack:<br>
        <input type="text" name="tech_stack" value="<?php echo htmlspecialchars($project->tech_stack); ?>">
    </label><br><br>

    <?php if (!empty($project->image)): ?>
        <p>Current Image:<br>
            <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($project->image); ?>" 
                 alt="Current Image" style="max-width: 300px;"><br><br>
        </p>
    <?php endif; ?>

    <label>Replace Image (optional):<br>
        <input type="file" name="image" accept="image/*">
    </label><br><br>

    <button type="submit">Update Project</button>
</form>
