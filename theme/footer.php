    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" style="margin-bottom:12px;">MePlann</a>
                    <p style="color: var(--text-muted); max-width: 360px; font-size: 0.95rem;">
                        Ứng dụng lên kế hoạch thông minh dành cho người hay suy nghĩ nhiều. Thấu hiểu năng lượng, tái định hình công việc và cân bằng áp lực tinh thần.
                    </p>
                </div>

                <div class="footer-links">
                    <a href="<?php echo esc_url(home_url('/privacy/')); ?>">Chính sách bảo mật</a>
                    <a href="<?php echo esc_url(home_url('/terms/')); ?>">Điều khoản dịch vụ</a>
                    <a href="<?php echo esc_url(home_url('/support/')); ?>">Trung tâm hỗ trợ</a>
                    <a href="<?php echo esc_url(home_url('/wp-admin/')); ?>" target="_blank">WP-Admin ⚙️</a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> MePlann Studio. Designed for iOS & Apple Ecosystem. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
