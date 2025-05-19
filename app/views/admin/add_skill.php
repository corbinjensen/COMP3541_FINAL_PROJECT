<section style="padding: 4rem 2rem;">
    <div style="margin-bottom: 2rem;">
        <a href="?url=admin/manage_skills" class="btn-secondary">← Back to Skills</a>
    </div>

    <h2 style="text-align: center; margin-bottom: 2rem;">➕ Add New Skill</h2>

    <form method="POST"
          style="max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

        <label>
            Skill Name:
            <input type="text" name="name" required class="form-input">
        </label>

        <label>
            Category <span style="font-size: 0.9rem; color: #666;">(e.g., Frontend, Backend, DB)</span>:
            <input type="text" name="category" class="form-input">
        </label>

        <label>
            Level <span style="font-size: 0.9rem; color: #666;">(e.g., Beginner, Intermediate, Expert)</span>:
            <input type="text" name="level" class="form-input">
        </label>

        <button type="submit" class="btn-primary">Add Skill</button>
    </form>
</section>
