    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">MePlann</a>
                    <p style="color: var(--text-dim); margin-top: 14px; max-width: 320px; font-size:0.95rem; line-height:1.65;">
                        A planning app for people whose minds don't run on autopilot.
                    </p>
                </div>
                <div class="footer-links">
                    <a href="<?php echo esc_url(home_url('/privacy/')); ?>">Privacy</a>
                    <a href="<?php echo esc_url(home_url('/terms/')); ?>">Terms</a>
                    <a href="mailto:support@meplann.com">Support</a>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; <?php echo date('Y'); ?> MePlann.</span>
                <span>By Silverbot</span>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
