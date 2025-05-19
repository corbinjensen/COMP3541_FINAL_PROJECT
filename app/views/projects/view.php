<section style="padding: 4rem 2rem; max-width: 800px; margin: 0 auto;">
    
    <?php if (!empty($project->image)): ?>
        <div style="text-align: center; margin-bottom: 2rem;">
            <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($project->image); ?>"
                 alt="<?= htmlspecialchars($project->title); ?>"
                 style="max-width: 100%; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        </div>
    <?php endif; ?>

    <h1 style="text-align: center; font-size: 2rem; margin-bottom: 1rem;">
        <?= htmlspecialchars($project->title); ?>
    </h1>

    <?php if (!empty($project->category)): ?>
        <p style="text-align: center; font-size: 1rem; color: #555; margin-bottom: 0.5rem;">
            <strong>Category:</strong> <?= htmlspecialchars($project->category); ?>
        </p>
    <?php endif; ?>

    <?php if (!empty($project->tech_stack)): ?>
        <p style="text-align: center; font-size: 1rem; color: #555; margin-bottom: 2rem;">
            <strong>Tech Stack:</strong> <?= htmlspecialchars($project->tech_stack); ?>
        </p>
    <?php endif; ?>

    <article style="line-height: 1.7; font-size: 1.05rem; color: #1e2a3b; margin-bottom: 3rem;">
        <?= nl2br(htmlspecialchars($project->description)); ?>
    </article>

    <div style="text-align: center;">
        <a href="?url=projects/index" class="btn-secondary">&larr; Back to Projects</a>
    </div>

</section>
