<h1>Contact Me</h1>

<?php if (!empty($success)) : ?>
    <p style="color: green;">Thank you! Your message has been received.</p>
<?php else: ?>
    <form method="POST">
        <label>Name:<br>
            <input type="text" name="name" required>
        </label><br><br>

        <label>Email:<br>
            <input type="email" name="email" required>
        </label><br><br>

        <label>Message:<br>
            <textarea name="message" rows="5" required></textarea>
        </label><br><br>

        <button type="submit">Send</button>
    </form>
<?php endif; ?>
