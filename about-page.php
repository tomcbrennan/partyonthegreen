<?php
    /**
    * Template Name: About Us
    */
?>

<?php 
    $aboutBanner = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<?php
    get_header();
?>

<main class="main about-page">
    <div class="page-banner">
        <div class="page-banner-content">
            <div class="banner-text">
                <h1><?php the_title(); ?></h1>
                <h4><?php the_field('banner_subheading') ?></h4>
            </div>
        </div>
        <div class="banner-image">
            <?php if(get_the_post_thumbnail_url()): ?>
                <img src="<?php the_post_thumbnail_url(); ?>">
            <?php endif; ?>
        </div>
    </div>

    <section class="section about-content">
        <div class="grid">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <section class="section view-services">
        <div class="grid">
            <div class="content">
                <h2>Check out what services we offer!</h2>
                <a class="btn btn-secondary" href="<?php echo get_post_type_archive_link('service'); ?>">
                    Our Services
                </a>
            </div>
        </div>
    </section>


</main>

<?php
    get_footer();
?>