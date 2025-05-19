<section style="padding: 4rem 0;">

    <h1 style="text-align: center; font-size: 2rem; margin-bottom: 3rem;">Blog</h1>

    <?php foreach ($posts as $index => $post): ?>
        <?php
            // Start on navy, then white, then blue
            $bgCycle = $index % 3;

            // Navy → White → Blue
            $background = [
                '#1e2a3b',   // 0: dark navy
                '#ffffff',   // 1: white
                '#3f5eff'    // 2: bright blue
            ][$bgCycle];

            $textColor = $bgCycle === 1 ? '#1e2a3b' : '#ffffff';       // white text unless white bg
            $linkColor = $bgCycle === 1 ? '#3f5eff' : '#ffffff';       // bright blue links on white
            $flexDir   = $index % 2 === 0 ? 'row' : 'row-reverse';     // alternate layout
        ?>

        <div style="display: flex; flex-wrap: wrap; flex-direction: <?= $flexDir ?>; background: <?= $background ?>; color: <?= $textColor ?>; align-items: stretch;">
            
            <!-- IMAGE -->
            <div style="flex: 1; min-width: 300px; max-height: 400px; overflow: hidden;">
                <?php if (!empty($post->image)): ?>
                    <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($post->image); ?>"
                         alt="<?= htmlspecialchars($post->title); ?>"
                         style="width: 100%; height: 100%; object-fit: cover;">
                <?php endif; ?>
            </div>

            <!-- TEXT -->
            <div style="flex: 1; min-width: 300px; padding: 3rem 2rem;">
                <h2 style="font-size: 1.5rem; margin-bottom: 1rem;">
                    <?= htmlspecialchars($post->title); ?>
                </h2>
                <p style="line-height: 1.6;">
                    <?= nl2br(htmlspecialchars(substr($post->content, 0, 200))); ?>...
                </p>
                <p style="margin-top: 1.5rem;">
                    <a href="?url=blog/view/<?= $post->id; ?>"
                       style="color: <?= $linkColor ?>; text-decoration: underline; font-weight: bold;">
                        Read more →
                    </a>
                </p>
            </div>

        </div>
    <?php endforeach; ?>

</section>
