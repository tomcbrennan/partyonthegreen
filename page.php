<?php 
    /**
    * Template Name: Page
    */
?>
<?php 
    get_header();
?>

<div class="main">
    <div class="page-banner">
        <div class="page-banner-content">
            <div class="banner-text">
                <h1><?php the_title(); ?></h1>
                <?php if(get_field('banner_subheading')): ?>
                    <h4> <?php the_field('banner_subheading'); ?> </h4>
                <?php endif; ?>
            </div>
        </div>
        <div class="banner-image">
            <?php if(get_the_post_thumbnail_url()): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>">
                <?php endif; ?>
        </div>
    </div>


    <section class="section">
        <?php the_content(); ?>
    </section>
</div>



<?php
    get_footer();
?>