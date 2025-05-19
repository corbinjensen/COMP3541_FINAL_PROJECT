<article style="max-width: 800px; margin: 4rem auto; padding: 2rem; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.05); font-family: 'Averta', sans-serif; color: #1e2a3b;">

    <?php if (!empty($post->image)): ?>
        <div style="text-align: center; margin-bottom: 2rem;">
            <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($post->image); ?>" 
                 alt="<?php echo htmlspecialchars($post->title); ?>" 
                 style="max-width: 100%; height: auto; border-radius: 10px;">
        </div>
    <?php endif; ?>

    <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">
        <?php echo htmlspecialchars($post->title); ?>
    </h1>

    <p style="color: #6c7a89; font-size: 0.9rem; margin-bottom: 2rem;">
        <em>Posted on <?php echo date('F j, Y', strtotime($post->created_at)); ?></em>
    </p>

    <div style="line-height: 1.8; font-size: 1.05rem;">
        <?php echo nl2br(htmlspecialchars($post->content)); ?>
    </div>

    <p style="margin-top: 2.5rem;">
        <a href="?url=blog/index" class="btn-secondary">
            ← Back to Blog
        </a>
    </p>

</article>
