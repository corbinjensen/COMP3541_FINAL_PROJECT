<footer style="background-color: #3b55ff; color: white; padding: 3rem 2rem; text-align: center;">
    <p style="font-size: 1.2rem;">Don’t be a stranger! Feel free to <a href="?url=contact/index" style="color: white; text-decoration: underline;">get in touch</a> about your project or just say hello.</p>

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
    <div style="margin-top: 2rem; font-size: 0.9rem;">
        <?php if (isset($_SESSION['user_id'])): ?>
            <p style="margin-bottom: 0.5rem;">Logged in as <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></p>
            <a href="?url=admin/dashboard" style="color: white; text-decoration: underline; margin-right: 1rem;">
                Dashboard
            </a>
            <a href="?url=admin/logout" style="color: white; text-decoration: underline;">
                Logout
            </a>
        <?php else: ?>
            <a href="?url=admin/login" style="color: white; text-decoration: underline;">
                Admin Login
            </a>
        <?php endif; ?>
    </div>


    <p style="margin-top: 2rem;">&copy; <?php echo date('Y'); ?> Corbin Jensen</p>
</footer>

</body>
</html>
