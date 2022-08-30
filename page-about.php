<?php get_header(); ?>

<section class="about-us">
    <h1>About Us</h1>
    <div class="row">
        <div class="item">
            <img src="<?php echo wp_get_attachment_url(get_field('person_01_image')); ?>" alt="Mando of SSH">
            <p><?php the_field('person_01'); ?></p>
        </div>
        <div class="item">
            <img src="<?php echo wp_get_attachment_url(get_field('person_02_image')); ?>" alt="Josh of SSH">
            <p><?php the_field('person_02'); ?></p>
        </div>
    </div>
    </div>
    <p><?php the_field('about_us_text_01'); ?></p>
    <p><?php the_field('about_us_text_02'); ?></p>
</section>

<?php get_footer(); ?>