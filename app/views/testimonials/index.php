<h1>Testimonials</h1>

<?php if (!empty($testimonials)) : ?>
    <?php foreach ($testimonials as $t): ?>
        <div style="margin-bottom: 2rem; display: flex; align-items: center; gap: 1rem;">
            
            <?php if (!empty($t->photo)): ?>
                <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($t->photo); ?>" 
                     alt="Photo of <?php echo htmlspecialchars($t->author_name); ?>" 
                     style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
            <?php else: ?>
                <div style="width: 80px; height: 80px; border-radius: 50%; background-color: #ccc;"></div>
            <?php endif; ?>

            <div>
                <blockquote style="margin: 0;">
                    <p style="font-style: italic;">"<?php echo htmlspecialchars($t->content); ?>"</p>
                    <footer>– <?php echo htmlspecialchars($t->author_name); ?></footer>
                </blockquote>
            </div>

        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No testimonials found.</p>
<?php endif; ?>
