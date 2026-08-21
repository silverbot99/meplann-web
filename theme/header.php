<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="MePlann là ứng dụng iOS quản lý kế hoạch thông minh thấu hiểu năng lượng & tâm trí người dùng. Tự động đọc vị mood, reframing task và cân bằng áp lực cuộc sống.">
    <meta name="keywords" content="MePlann, iOS planner, energy adaptive planning, ứng dụng thấu hiểu người dùng, quản lý thời gian, braintrust, task reframing">

    <!-- OpenGraph Meta Tags -->
    <meta property="og:title" content="MePlann iOS | Lên kế hoạch theo năng lượng & tâm trí của bạn">
    <meta property="og:description" content="Ứng dụng quản lý kế hoạch iOS dành cho người hay nghĩ nhiều. Thấu hiểu mood, giảm cognitive load và cân bằng nhịp sống.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://meplann.com/">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/app_preview.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

    <!-- Schema JSON-LD SoftwareApplication -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "MePlann",
      "operatingSystem": "iOS 17.0, iOS 18.0, watchOS",
      "applicationCategory": "ProductivityApplication",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "1280"
      },
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      }
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/app_preview.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                MePlann <span class="logo-tag">iOS App</span>
            </a>

            <nav class="nav-menu">
                <a href="#features" class="nav-link">Tính năng</a>
                <a href="#ecosystem" class="nav-link">Hệ sinh thái Apple</a>
                <a href="#pricing" class="nav-link">Bảng giá</a>
                <a href="#reviews" class="nav-link">Đánh giá</a>
                <a href="#faq" class="nav-link">Hỏi đáp</a>
                <a href="<?php echo esc_url(home_url('/wp-admin/')); ?>" class="nav-link" target="_blank" style="color:var(--accent);font-weight:700;">⚙️ WP-Admin</a>
                <a href="https://apps.apple.com" target="_blank" class="btn btn-sm"> Tải Trên App Store</a>
            </nav>
        </div>
    </header>
