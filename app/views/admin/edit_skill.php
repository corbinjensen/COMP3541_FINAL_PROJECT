<h2>Edit Skill</h2>

<form method="POST">
    <label>Skill Name:<br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($skill->name); ?>" required>
    </label><br><br>

    <label>Category:<br>
        <input type="text" name="category" value="<?php echo htmlspecialchars($skill->category); ?>">
    </label><br><br>

    <label>Level:<br>
        <input type="text" name="level" value="<?php echo htmlspecialchars($skill->level); ?>">
    </label><br><br>

    <button type="submit">Update Skill</button>
</form>
