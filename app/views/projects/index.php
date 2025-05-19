<section style="padding: 4rem 0; background: #ffffff;">
    <h1 style="text-align: center; font-size: 2rem; margin-bottom: 2rem;">Case Studies</h1>

    <!-- Filter dropdown (optional) -->
    <!-- You can reuse your existing filter markup here -->

    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        padding: 0 2rem;
        align-items: stretch;
    ">
    <?php foreach ($projects as $project): ?>
        <div style="display: flex; flex-direction: column; height: 100%;">

            <a href="?url=projects/view/<?= $project->id; ?>" style="text-decoration: none; color: inherit;">
                <!-- Image -->
                <div class="project-thumb" style="flex: 1; height: 250px; overflow: hidden; position: relative;">
                    <img src="<?= URLROOT . '/public/uploads/' . htmlspecialchars($project->image); ?>"
                        alt="<?= htmlspecialchars($project->title); ?>"
                        class="project-image"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease, opacity 0.4s ease;">
                    <div class="project-overlay"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                            background-color: rgba(0, 0, 0, 0); transition: background-color 0.4s ease;"></div>
                </div>

                <!-- Title -->
                <div style="text-align: center; padding: 1rem 0;">
                    <h3 style="margin: 0; font-size: 1rem; font-weight: normal; color: #1e2a3b;">
                        <?= htmlspecialchars($project->title); ?>
                    </h3>
                </div>
            </a>

        </div>
    <?php endforeach; ?>

    </div>
</section>
