<h1>Testimonials</h1>

<?php if (!empty($testimonials)) : ?>
    <?php foreach ($testimonials as $t): ?>
        <blockquote style="margin-bottom: 2rem;">
            <p>"<?php echo htmlspecialchars($t->content); ?>"</p>
            <footer>– <?php echo htmlspecialchars($t->author_name); ?></footer>
        </blockquote>
    <?php endforeach; ?>
<?php else: ?>
    <p>No testimonials yet.</p>
<?php endif; ?>
