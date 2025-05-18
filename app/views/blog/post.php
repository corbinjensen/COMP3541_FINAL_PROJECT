<article>
    <?php if (!empty($post->image)): ?>
        <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($post->image); ?>" 
             alt="<?php echo htmlspecialchars($post->title); ?>" 
             style="max-width: 500px; height: auto;"><br><br>
    <?php endif; ?>

    <h1><?php echo htmlspecialchars($post->title); ?></h1>
    <p><em><?php echo $post->created_at; ?></em></p>
    <p><?php echo nl2br(htmlspecialchars($post->content)); ?></p>
</article>
