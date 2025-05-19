<section style="padding: 4rem 0;">

    <h1 style="text-align: center; font-size: 2.5rem; font-weight: bold; margin-bottom: 3rem; color: #1e2a3b;">
        Blog
    </h1>

    <?php foreach ($posts as $index => $post): ?>
        <?php
            $bgCycle = $index % 3;
            $backgrounds = ['#1e2a3b', '#ffffff', '#3f5eff'];
            $textColors = ['#ffffff', '#1e2a3b', '#ffffff'];
            $linkColors = ['#ffffff', '#3f5eff', '#ffffff'];
            $background = $backgrounds[$bgCycle];
            $textColor = $textColors[$bgCycle];
            $linkColor = $linkColors[$bgCycle];
            $flexDir = $index % 2 === 0 ? 'row' : 'row-reverse';
        ?>

        <div style="
            display: flex;
            flex-direction: <?= $flexDir ?>;
            flex-wrap: wrap;
            background: <?= $background ?>;
            color: <?= $textColor ?>;
            align-items: stretch;
            transition: background 0.3s ease;
        ">

            <!-- IMAGE -->
            <div style="flex: 1; min-width: 300px; max-height: 400px; overflow: hidden;">
                <?php if (!empty($post->image)): ?>
                    <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($post->image); ?>"
                         alt="<?= htmlspecialchars($post->title); ?>"
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                <?php endif; ?>
            </div>

            <!-- TEXT -->
            <div style="flex: 1; min-width: 300px; padding: 3rem 2rem;">
                <h2 style="font-size: 2rem; margin-bottom: 1rem;">
                    <?= htmlspecialchars($post->title); ?>
                </h2>
                <p style="line-height: 1.6; font-size: 1rem;">
                    <?= nl2br(htmlspecialchars(substr($post->content, 0, 220))); ?>...
                </p>
                <p style="margin-top: 2rem;">
                    <a href="?url=blog/view/<?= $post->id; ?>"
                       style="display: inline-block; font-weight: bold; text-decoration: none; color: <?= $linkColor ?>; border-bottom: 2px solid <?= $linkColor ?>;">
                        Read more →
                    </a>
                </p>
            </div>
        </div>

    <?php endforeach; ?>
</section>
