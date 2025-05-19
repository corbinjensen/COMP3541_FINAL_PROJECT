<section style="background-color: #3b55ff; color: white; padding: 4rem 2rem;">
    <div style="max-width: 1000px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 3rem;">

        <!-- LEFT: Profile Photo -->
        <div style="flex: 1; min-width: 250px;">
            <!-- Profile Image -->
            <div style="text-align: center; margin-bottom: 2rem;">
                <img src="<?= URLROOT ?>/public/uploads/corbin.jpeg"
                    alt="Corbin Jensen"
                    style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
            </div>
        </div>

        <!-- RIGHT: Bio Content -->
        <div style="flex: 2; min-width: 300px;">
            <h1 style="font-size: 2rem; margin-bottom: 1rem;">Corbin Jensen</h1>
            
            <p style="line-height: 1.6; margin-bottom: 1rem;">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
                ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam...
            </p>

            <p style="line-height: 1.6; margin-bottom: 2rem;">
                ...quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            </p>

            <a href="<?php echo URLROOT; ?>/public/assets/Corbin-Jensen-CV.pdf" download 
               style="background: white; color: #3b55ff; padding: 0.75rem 1.5rem; border-radius: 30px; 
                      font-weight: bold; text-decoration: none;">
                Download my CV ↓
            </a>
        </div>
    </div>
</section>
<!-- SKILLS SECTION -->
<section style="background-color: #f9f9f9; padding: 4rem 2rem;">
    <div style="max-width: 1000px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 3rem; align-items: center;">

        <!-- LEFT: Skills List -->
        <div style="flex: 1; min-width: 280px;">
            <h2 style="font-size: 1.5rem; margin-bottom: 1rem;">Technology & Skills</h2>

            <?php if (!empty($skills)): ?>
                <ul style="list-style-type: disc; padding-left: 1.5rem; line-height: 1.8;">
                    <?php foreach ($skills as $skill): ?>
                        <li><?= htmlspecialchars($skill->name); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No skills found.</p>
            <?php endif; ?>
        </div>


        <!-- RIGHT: Image -->
        <div style="flex: 1; min-width: 280px;">
            <img src="<?php echo URLROOT; ?>/public/uploads/laptop.png" 
                 alt="Laptop with code" 
                 style="width: 100%; height: auto; border-radius: 4px;">
        </div>
    </div>
</section>

