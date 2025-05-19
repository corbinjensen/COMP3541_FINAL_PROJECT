<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/manage_skills" class="btn-secondary">← Back to Skills</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">✏️ Edit Skill</h2>

    <form method="POST"
          style="max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

        <label>
            Skill Name:
            <input type="text" name="name" value="<?= htmlspecialchars($skill->name); ?>" required class="form-input">
        </label>

        <label>
            Category:
            <input type="text" name="category" value="<?= htmlspecialchars($skill->category); ?>" class="form-input">
        </label>

        <label>
            Level:
            <input type="text" name="level" value="<?= htmlspecialchars($skill->level); ?>" class="form-input">
        </label>

        <button type="submit" class="btn-primary">Update Skill</button>
    </form>
</section>
