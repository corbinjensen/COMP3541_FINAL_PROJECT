<h1>Skills</h1>

<?php if (!empty($skills)) : ?>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li>
                <strong><?php echo htmlspecialchars($skill->name); ?></strong>
                <?php if (!empty($skill->category)) : ?>
                    (<?php echo htmlspecialchars($skill->category); ?>)
                <?php endif; ?>
                <?php if (!empty($skill->level)) : ?>
                    - <?php echo htmlspecialchars($skill->level); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No skills listed yet.</p>
<?php endif; ?>
