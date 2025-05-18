<h2>Add New Blog Post</h2>

<form method="POST" enctype="multipart/form-data">
    <label>Title:<br>
        <input type="text" name="title" required>
    </label><br><br>

    <label>Content:<br>
        <textarea name="content" rows="8" required></textarea>
    </label><br><br>

    <label>Upload Image:<br>
        <input type="file" name="image" accept="image/*">
    </label><br><br>

    <button type="submit">Add Post</button>
</form>

