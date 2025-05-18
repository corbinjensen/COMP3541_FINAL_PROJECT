<article>
    <?php if (!empty($project->image)): ?>
        <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($project->image); ?>" 
             alt="<?php echo htmlspecialchars($project->title); ?>" 
             style="max-width: 500px; height: auto;"><br><br>
    <?php endif; ?>

    <h1><?php echo htmlspecialchars($project->title); ?></h1>
    <?php if (!empty($project->category)): ?>
        <p><strong>Category:</strong> <?php echo htmlspecialchars($project->category); ?></p>
    <?php endif; ?>
    <p><strong>Tech Stack:</strong> <?php echo htmlspecialchars($project->tech_stack); ?></p>
    <p><?php echo nl2br(htmlspecialchars($project->description)); ?></p>
    <p><a href="?url=projects/index">&larr; Back to Projects</a></p>
</article>
