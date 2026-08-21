<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="MePlann is a planning app for people who overthink everything. It reads your energy and mood, then adjusts how it plans your day — instead of forcing you into someone else's system.">
    <meta name="keywords" content="MePlann, iOS planner, energy adaptive, productivity app, brain dump, task reframing, Apple Watch, no guilt planning">

    <!-- OpenGraph -->
    <meta property="og:title" content="MePlann | Plan around your energy, not against it">
    <meta property="og:description" content="A planning app for people whose minds don't run on autopilot. MePlann reads your energy and adapts your day.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://meplann.com/">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/app_preview.png">

    <!-- Schema.org SoftwareApplication (Rank Math compatible) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "MePlann",
      "operatingSystem": "iOS 17, iOS 18, watchOS",
      "applicationCategory": "ProductivityApplication",
      "description": "A planning app for people who overthink everything. Reads your energy and adjusts your day accordingly.",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "1280"
      },
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "author": {
        "@type": "Organization",
        "name": "Silverbot Studio"
      }
    }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/app_preview.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

    <div class="atmosphere"></div>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">MePlann</a>

            <div class="nav-links">
                <div class="lang-switcher">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="lang-link active">EN</a>
                    <a href="<?php echo esc_url(home_url('/vi/')); ?>" class="lang-link">VI</a>
                </div>
                <a href="mailto:support@meplann.com" class="nav-link">Support</a>
                <a href="https://apps.apple.com" target="_blank" class="btn btn-sm">Open MePlann</a>
            </div>
        </div>
    </header>
