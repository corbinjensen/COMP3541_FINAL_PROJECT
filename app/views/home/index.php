<!-- HERO SECTION -->
<section style="background-color: #3b55ff; color: white; padding: 4rem 2rem;">
    <div style="max-width: 700px; margin: 0 auto;">
        <p style="font-size: 2rem; line-height: 1.4;">
            <strong>Corbin Jensen</strong> is a Computer Science student

that enjoys creating beautiful things with code

that help people, and make an impact.
        </p>
    </div>
</section>


<section style="padding: 0; margin: 0;">

    <?php foreach ($featuredProjects as $index => $project): ?>
        <?php
            $isDark = $index % 2 === 1;
            $bgColor = $isDark ? '#1e2a3b' : '#ffffff';
            $textColor = $isDark ? '#ffffff' : '#1e2a3b';
            $buttonBg = $isDark ? '#ffffff' : '#1e2a3b';
            $buttonText = $isDark ? '#1e2a3b' : '#ffffff';
        ?>

    <div class="project-row" style="display: flex; flex-wrap: wrap; flex-direction: <?= $index % 2 === 0 ? 'row' : 'row-reverse'; ?>; align-items: stretch; background: <?= $bgColor ?>;">
            
            <!-- IMAGE SIDE -->
            <div class="project-image-wrapper" style="flex: 1; min-width: 300px; overflow: hidden;">
                <img src="<?php echo URLROOT . '/public/uploads/' . htmlspecialchars($project->image); ?>"
                    alt="<?php echo htmlspecialchars($project->title); ?>"
                    class="project-image"
                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
            </div>


            <!-- TEXT SIDE -->
            <div style="flex: 1; min-width: 300px; padding: 4rem 2rem; color: <?= $textColor ?>;">
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-weight: bold;">
                    <?= htmlspecialchars($project->title); ?>
                </h3>

                <!-- Tech Stack -->
                <div style="margin-bottom: 1rem;">
                    <?php foreach (explode(',', $project->tech_stack) as $tech): ?>
                        <span style="
                            display: inline-block;
                            background: <?= $isDark ? '#2c3e50' : '#f0f0f0' ?>;
                            color: <?= $isDark ? '#ffffff' : '#333' ?>;
                            padding: 0.4rem 0.75rem;
                            border-radius: 999px;
                            font-size: 0.85rem;
                            margin-right: 0.5rem;
                            margin-bottom: 0.5rem;
                        ">
                            <?= htmlspecialchars(trim($tech)); ?>
                        </span>
                    <?php endforeach; ?>
                </div>

                <!-- Description -->
                <p style="line-height: 1.6; margin-bottom: 2rem;">
                    <?= nl2br(htmlspecialchars(substr($project->description, 0, 220))); ?>...
                </p>

                <!-- Button -->
                <a href="?url=projects/view/<?= $project->id; ?>"
                   style="
                       display: inline-block;
                       background: <?= $buttonBg ?>;
                       color: <?= $buttonText ?>;
                       padding: 0.9rem 2rem;
                       font-size: 1rem;
                       font-weight: bold;
                       border-radius: 40px;
                       text-decoration: none;
                   ">
                    View Case Study →
                </a>
            </div>
        </div>
    <?php endforeach; ?>

</section>


<!-- ABOUT CORBIN CALLOUT SECTION -->
<section style="text-align: center; padding: 4rem 2rem;">
   <!-- Circular Profile in Callout -->
    <div style="text-align: center;">
        <img src="<?= URLROOT ?>/public/uploads/corbin.jpeg"
            alt="Corbin Jensen"
            style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 1rem;">
    </div>

    <p style="font-size: 1.4rem; max-width: 700px; margin: 0 auto;">
        Unlike most developers, Corbin actually sleeps, waking up every day ready to code again.
    </p><br>

    <a href="?url=about/index" 
       style="display: inline-block; background: #3b55ff; color: white; padding: 0.75rem 1.5rem; border-radius: 30px; 
              font-weight: bold; text-decoration: none;">
        About Corbin →
    </a>
</section>


<!-- TESTIMONIALS -->
<section style="padding: 4rem 2rem; background-color: #1e2a3b; color: white;">
    <h2 style="text-align: center; font-size: 2rem; margin-bottom: 3rem;">Testimonials</h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        <?php foreach ($testimonials as $t): ?>
            <div style="background-color: #2d3a4b; border-radius: 12px; padding: 2rem; position: relative;">
                
                <?php if (!empty($t->photo)): ?>
                    <div style="text-align: center; margin-bottom: 1rem;">
                        <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($t->photo); ?>"
                             alt="<?= htmlspecialchars($t->author_name); ?>"
                             style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; border: 3px solid white;">
                    </div>
                <?php endif; ?>

                <p style="font-style: italic; line-height: 1.6;">
                    “<?= nl2br(htmlspecialchars($t->content)); ?>”
                </p>

                <p style="margin-top: 1rem; font-weight: bold;">
                    <?= htmlspecialchars($t->author_name); ?>
                </p>

                <?php if (!empty($t->author_title)): ?>
                    <p style="font-size: 0.9rem; color: #ccc;">
                        <?= htmlspecialchars($t->author_title); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>



