<?php
get_header();
?>

<main id="main-content">

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-text">
                    <div class="hero-eyebrow">
                        <span>✨ iOS 18 Featured App</span>
                        <span>·</span>
                        <span>Thấu Hiểu Năng Lượng</span>
                    </div>

                    <h1 class="hero-title">
                        Lên kế hoạch theo <span>năng lượng</span> của bạn.
                    </h1>

                    <p class="hero-desc">
                        Say 'no' với những chiếc to-do list cứng nhắc bắt ngày nào cũng năng suất như nhau. 
                        MePlann là ứng dụng iOS biết 'đọc vị' trạng thái của bạn: Đang tụt mood? Xếp việc nhẹ nhàng. 
                        Đang vào guồng? Đẩy việc quan trọng lên!
                    </p>

                    <div style="display:flex; gap:16px; flex-wrap:wrap; align-items:center;">
                        <a href="https://apps.apple.com" target="_blank" class="btn">
                            <span> Tải Trên App Store</span>
                        </a>
                        <a href="#features" class="btn btn-outline">
                            <span>Khám Phá Tính Năng</span>
                        </a>
                    </div>

                    <div class="hero-rating">
                        <span class="stars">★★★★★</span>
                        <strong>4.9 / 5.0 Rating</strong>
                        <span>(1,280+ Đánh giá trên App Store)</span>
                    </div>
                </div>

                <div class="hero-image">
                    <div class="phone-mockup">
                        <div class="device-frame">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/app_preview.png" alt="Giao diện ứng dụng MePlann iOS App">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMMITMENT BAR -->
    <section class="commitment-bar">
        <div class="container">
            <div class="commitment-grid">
                <div class="commitment-item">
                    <div class="commitment-icon">🛡️</div>
                    <div class="commitment-text">
                        <strong>100% Privacy & Local</strong>
                        <span>Dữ liệu lưu an toàn trên máy</span>
                    </div>
                </div>
                <div class="commitment-item">
                    <div class="commitment-icon">🧠</div>
                    <div class="commitment-text">
                        <strong>AI Mood Engine</strong>
                        <span>Phân tích nhịp năng lượng</span>
                    </div>
                </div>
                <div class="commitment-item">
                    <div class="commitment-icon">⌚</div>
                    <div class="commitment-text">
                        <strong>Apple Ecosystem</strong>
                        <span>Đồng bộ Watch, Widget, Shortcut</span>
                    </div>
                </div>
                <div class="commitment-item">
                    <div class="commitment-icon">🕊️</div>
                    <div class="commitment-text">
                        <strong>No Guilt Rest</strong>
                        <span>Không áp lực khi bạn nghỉ ngơi</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE FEATURES SECTION -->
    <section class="section" id="features">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">01 / TÍNH NĂNG CỐT LÕI</span>
                <h2 class="section-title">Thực tế khi bạn cần kế hoạch,<br>nhẹ nhàng khi bạn cần nghỉ</h2>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <span class="card-icon">🫂</span>
                    <h3>Học cách bạn làm việc</h3>
                    <p>Bài trắc nghiệm ngắn giúp MePlann nhận diện bạn tư duy theo cấu trúc hay bộc phát ý tưởng bất chợt — để sắp xếp kế hoạch phù hợp với phong cách của chính bạn.</p>
                </div>

                <div class="feature-card">
                    <span class="card-icon">🧠</span>
                    <h3>Tái định hình (Reframing Task)</h3>
                    <p>Khi bạn bí ý tưởng hoặc căng thẳng, MePlann không hô hào "cố lên" suông. Hệ thống tự động chia nhỏ công việc thành một bước tiếp theo cực kỳ dễ làm ngay.</p>
                </div>

                <div class="feature-card">
                    <span class="card-icon">🕊️</span>
                    <h3>Không dằn vặt khi nghỉ ngơi</h3>
                    <p>Danh sách chưa xong không bị coi là thất bại. Nếu nhận diện bạn đang quá tải, MePlann tự động ẩn bớt việc để bạn giải tỏa bớt cognitive load.</p>
                </div>

                <div class="feature-card">
                    <span class="card-icon">🔮</span>
                    <h3>BrainDump & Tarot Reflection</h3>
                    <p>Xả sạch suy nghĩ hỗn loạn bằng Voice Note / Văn bản và rút một lá bài định hướng tâm trí trước khi bắt đầu công việc.</p>
                </div>

                <div class="feature-card">
                    <span class="card-icon">📊</span>
                    <h3>Báo cáo Nhịp Năng Lượng</h3>
                    <p>Theo dõi xu hướng năng lượng theo ngày và tuần để tìm ra thời điểm vàng làm việc hiệu quả nhất trong ngày của bạn.</p>
                </div>

                <div class="feature-card">
                    <span class="card-icon">🔒</span>
                    <h3>Bảo mật tuyệt đối</h3>
                    <p>Toàn bộ suy nghĩ cá nhân của bạn được lưu local mã hóa trên thiết bị iOS. Không bao giờ thu thập hoặc bán dữ liệu riêng tư.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLE ECOSYSTEM INTEGRATION -->
    <section class="section eco-section" id="ecosystem">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">02 / HỆ SINH THÁI APPLE</span>
                <h2 class="section-title">Tối ưu hoàn hảo cho iPhone, Apple Watch & iPad</h2>
            </div>

            <div class="eco-grid">
                <div class="eco-card">
                    <h4>📱 Interactive iOS 18 Widgets</h4>
                    <p>Xem nhịp năng lượng và đánh dấu hoàn thành việc ngay trên màn hình khóa (Lock Screen) và Home Screen.</p>
                </div>

                <div class="eco-card">
                    <h4>⌚ Apple Watch Complications</h4>
                    <p>Nhận gợi ý micro-break và kiểm tra công việc tiếp theo ngay trên cổ tay mà không cần mở điện thoại.</p>
                </div>

                <div class="eco-card">
                    <h4>⚡ Siri Shortcuts & Live Activities</h4>
                    <p>Ghi nhanh BrainDump bằng giọng nói với Siri: "Hey Siri, BrainDump with MePlann".</p>
                </div>

                <div class="eco-card">
                    <h4>☁️ Seamless iCloud Sync</h4>
                    <p>Đồng bộ tức thì và bảo mật trên tất cả các thiết bị Apple của bạn.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING SECTION -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">03 / BẢNG GIÁ DỊCH VỤ</span>
                <h2 class="section-title">Lựa chọn gói phù hợp với bạn</h2>
            </div>

            <div class="pricing-grid">
                <!-- Plan 1 -->
                <div class="pricing-card">
                    <h3>MePlann Starter</h3>
                    <p style="color:var(--text-muted);">Dành cho người mới bắt đầu</p>
                    <div class="pricing-price">Miễn phí <span>/ trọn đời</span></div>
                    <ul class="pricing-features">
                        <li>✓ Lên kế hoạch theo ngày cơ bản</li>
                        <li>✓ Phân tích năng lượng thủ công</li>
                        <li>✓ Lưu trữ local an toàn</li>
                        <li>✓ Ghi chú BrainDump văn bản</li>
                    </ul>
                    <a href="https://apps.apple.com" target="_blank" class="btn btn-outline btn-block">Tải Miễn Phí</a>
                </div>

                <!-- Plan 2 -->
                <div class="pricing-card featured">
                    <span class="pricing-badge">Khuyên Dùng</span>
                    <h3>MePlann Pro</h3>
                    <p style="color:var(--text-muted);">Trải nghiệm thấu hiểu toàn diện</p>
                    <div class="pricing-price">99.000đ <span>/ tháng</span></div>
                    <ul class="pricing-features">
                        <li>✓ Tự động phân tích AI Mood Engine</li>
                        <li>✓ AI Reframing & Chia nhỏ micro-steps</li>
                        <li>✓ Đồng bộ Apple Watch & Interactive Widgets</li>
                        <li>✓ BrainDump giọng nói & Tarot Reflection</li>
                        <li>✓ Báo cáo phân tích nhịp năng lượng sâu</li>
                    </ul>
                    <a href="https://apps.apple.com" target="_blank" class="btn btn-block">Dùng Thử 7 Ngày Miễn Phí</a>
                </div>

                <!-- Plan 3 -->
                <div class="pricing-card">
                    <h3>Lifetime Supporter</h3>
                    <p style="color:var(--text-muted);">Sở hữu trọn đời & Ủng hộ Studio</p>
                    <div class="pricing-price">999.000đ <span>/ trọn đời</span></div>
                    <ul class="pricing-features">
                        <li>✓ Toàn bộ tính năng MePlann Pro</li>
                        <li>✓ Cập nhật miễn phí mọi phiên bản tương lai</li>
                        <li>✓ Huy hiệu Supporter đặc biệt trên App</li>
                        <li>✓ Hỗ trợ ưu tiên 1:1 từ đội ngũ phát triển</li>
                    </ul>
                    <a href="https://apps.apple.com" target="_blank" class="btn btn-gold btn-block">Mua Trọn Đời</a>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS SECTION -->
    <section class="section" id="reviews" style="background:var(--bg-alt);">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">04 / ĐÁNH GIÁ TỪ CỘNG ĐỒNG</span>
                <h2 class="section-title">Người dùng iOS nói gì về MePlann?</h2>
            </div>

            <div class="reviews-grid">
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p style="font-size:0.98rem;margin:12px 0;color:var(--text-secondary);">
                        "Mình là người hayoverthink và luôn cảm thấy dằn vặt nếu to-do list cuối ngày còn thừa việc. MePlann thực sự thay đổi tư duy của mình, app tự giảm bớt việc khi thấy mình quá tải."
                    </p>
                    <div class="review-user">
                        <div class="review-avatar">N</div>
                        <div>
                            <strong>Ngọc Anh</strong>
                            <div style="font-size:0.8rem;color:var(--text-muted);">UI/UX Designer · Hà Nội</div>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p style="font-size:0.98rem;margin:12px 0;color:var(--text-secondary);">
                        "Tính năng AI Task Reframing cực đỉnh. Mấy task to đùng nhìn phát hãi được chia thành những bước nhỏ xíu làm phát xong luôn. Widget iOS 18 cực đẹp!"
                    </p>
                    <div class="review-user">
                        <div class="review-avatar">M</div>
                        <div>
                            <strong>Minh Hoàng</strong>
                            <div style="font-size:0.8rem;color:var(--text-muted);">Software Engineer · TP.HCM</div>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p style="font-size:0.98rem;margin:12px 0;color:var(--text-secondary);">
                        "Giao diện tinh tế chuẩn phong cách Apple. Cảm giác dùng nhẹ nhàng, không bị hối thúc. Rất đáng giá cho người muốn làm việc bền vững."
                    </p>
                    <div class="review-user">
                        <div class="review-avatar">T</div>
                        <div>
                            <strong>Thu Trang</strong>
                            <div style="font-size:0.8rem;color:var(--text-muted);">Content Creator · Đà Nẵng</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="section" id="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">05 / CÂU HỎI THƯỜNG GẶP</span>
                <h2 class="section-title">Giải đáp thắc mắc</h2>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">❓ MePlann khác gì so với các ứng dụng To-Do List thông thường?</div>
                    <div class="faq-answer">Các ứng dụng khác chỉ tập trung vào việc ép bạn hoàn thành tối đa số lượng công việc. MePlann tập trung vào nhịp năng lượng thực tế của bạn, giúp bạn làm việc hiệu quả khi sung sức và nghỉ ngơi hợp lý khi quá tải.</div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">❓ Dữ liệu cá nhân của tôi có được bảo mật không?</div>
                    <div class="faq-answer">Có! MePlann áp dụng cơ chế Local-First. Toàn bộ thông tin suy nghĩ, kế hoạch của bạn được lưu mã hóa trực tiếp trên máy và iCloud của bạn.</div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">❓ Ứng dụng có hỗ trợ tiếng Việt không?</div>
                    <div class="faq-answer">Có, MePlann hỗ trợ 100% giao diện và nội dung tiếng Việt chuẩn xác.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- DYNAMIC WORDPRESS BLOG POSTS -->
    <section class="section" id="insights" style="background:var(--bg-alt);">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">06 / INSIGHTS & TƯ DUY NĂNG SUẤT</span>
                <h2 class="section-title">Bài Viết & Góc Nhìn Mới Nhất</h2>
            </div>

            <div class="features-grid">
                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ));

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <article class="feature-card">
                            <span class="section-tag"><?php echo get_the_date('M d, Y'); ?></span>
                            <h3><a href="<?php the_permalink(); ?>" style="color:var(--accent);text-decoration:none;"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" style="color:var(--accent-light);font-weight:600;margin-top:12px;display:inline-block;text-decoration:none;">Đọc tiếp →</a>
                        </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p style="text-align:center;color:var(--text-muted);">Chưa có bài viết mới trong WP-Admin.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
