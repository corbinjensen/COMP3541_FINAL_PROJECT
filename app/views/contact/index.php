<?php if (!empty($_SESSION['contact_success'])): ?>
    <p style="color: green; text-align: center;">
        <?php echo $_SESSION['contact_success']; unset($_SESSION['contact_success']); ?>
    </p>
<?php endif; ?>
<section style="padding: 4rem 2rem; background-color: #f9f9f9; color: #1e2a3b;">
    <div style="max-width: 600px; margin: 0 auto;">

        <h1 style="text-align: center; font-size: 2rem; margin-bottom: 2rem;">Get in Touch</h1>

        <form method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">

            <div>
                <label for="name" style="font-weight: bold;">Name</label><br>
                <input type="text" name="name" id="name" required
                       style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 8px;">
            </div>

            <div>
                <label for="email" style="font-weight: bold;">Email</label><br>
                <input type="email" name="email" id="email" required
                       style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 8px;">
            </div>

            <div>
                <label for="message" style="font-weight: bold;">Message</label><br>
                <textarea name="message" id="message" rows="6" required
                          style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 8px;"></textarea>
            </div>

            <div style="text-align: center;">
                <button type="submit"
                        style="background: #1e2a3b; color: white; padding: 0.75rem 2rem; border: none;
                               border-radius: 30px; font-size: 1rem; font-weight: bold; cursor: pointer;">
                    Send Message →
                </button>
            </div>

        </form>

    </div>
</section>
