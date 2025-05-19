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
                Corbin Jensen is a web developer and computing science student with a background in digital media, public interest technology, and sustainable innovation. He’s passionate about creating clean, user-friendly websites and tools that make everyday systems more accessible and efficient. Currently based in Alberta, Corbin is completing his BSc in Computing Science while collaborating on civic tech, design, and community projects.
            </p>


              <p style="margin: 1.5rem 0;">
            <a href="<?php echo URLROOT; ?>/public/assets/Corbin-Jensen-CV.pdf" download 
               style="background: white; color: #3b55ff; padding: 0.8rem 1.5rem; border-radius: 40px; 
                      font-weight: bold; text-decoration: none; margin-right: 1rem;">
                <i class="fas fa-download"></i> Download my CV
            </a>

            <a href="https://www.linkedin.com/in/corbinjensen/" target="_blank" style="color: white; margin-right: 1rem;">
                <i class="fab fa-linkedin fa-2x"></i>
            </a>

            <a href="http://github.com/corbinjensen" target="_blank" style="color: white;">
                <i class="fab fa-github fa-2x"></i>
            </a>
        </p>
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

