<?php get_header(); ?>
<main class="container" style="padding: 60px 24px;">
    <h1 style="font-family:'Playfair Display',serif;font-size:2.8rem;color:#3A5A40;margin-bottom:20px;">MePlann Local WordPress</h1>
    <p style="font-size:1.2rem;color:#495057;">Plan around your energy, not against it.</p>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>
