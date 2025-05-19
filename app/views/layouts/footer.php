<?php if (!isset($_SESSION['user_id'])): ?>
    <footer style="background-color: #3b55ff; color: white; padding: 3rem 2rem; text-align: center;">
        <p style="font-size: 1.2rem;">
            Don’t be a stranger! Feel free to 
            <a href="?url=contact/index" style="color: white; text-decoration: underline;">get in touch</a> 
            about your project or just say hello.
        </p>

        <p style="font-size: 1.8rem; margin: 1rem 0;">
            <a href="?url=contact/index" style="color: white; text-decoration: none;">
                Contact Me ↗
            </a>
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
    </footer>
<?php endif; ?>
<footer style="
    background-color: #ffffff;
    padding: 1.5rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.95rem;
    color: #1e2a3b;
    border-top: 1px solid #eee;
">
    <!-- Left: Copyright -->
    <div>
        &copy; <?= date('Y') ?> Corbin Jensen
    </div>

    <!-- Right: Admin Links + Favicon -->
    <div style="display: flex; align-items: center; gap: 1.5rem;">
        <?php if (isset($_SESSION['user_id'])): ?>
            <span>Logged in as <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></span>
            <a href="?url=admin/dashboard" style="color: #1e2a3b; text-decoration: none;">Dashboard</a>
            <a href="?url=admin/logout" style="color: #1e2a3b; text-decoration: none;">Logout</a>
        <?php else: ?>
            <a href="?url=admin/login" style="color: #1e2a3b; text-decoration: none;">Admin Login</a>
        <?php endif; ?>
        <img src="<?= URLROOT ?>/public/favicon.png" alt="Corbin Logo" style="width: 32px; height: 32px;">
    </div>
</footer>

</body>
</html>
