<h1>Blog</h1>

<?php if (!empty($posts)) : ?>
    <?php foreach ($posts as $post): ?>
        <article style="margin-bottom: 2rem;">
            <?php if (!empty($post->image)): ?>
                <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($post->image); ?>" 
                     alt="<?php echo htmlspecialchars($post->title); ?>" 
                     style="max-width: 300px; height: auto;"><br>
            <?php endif; ?>

            <h2><?php echo htmlspecialchars($post->title); ?></h2>
            <p><em><?php echo $post->created_at; ?></em></p>
            <p><?php echo nl2br(htmlspecialchars(substr($post->content, 0, 200))); ?>...</p>
            <p><a href="?url=blog/view/<?php echo $post->id; ?>">Read more</a></p>
            <hr>
        </article>
    <?php endforeach; ?>
<?php else: ?>
    <p>No blog posts found.</p>
<?php endif; ?>
