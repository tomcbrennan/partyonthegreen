
<?php
    get_header();
?>

<main class="main archive-gallery-page">
    <div class="page-banner">
        <div class="page-banner-content">
            <div class="banner-text">
                <h1>Gallery</h1>
                <h4>Photos from our latest events!</h4>
            </div>
        </div>
        <div class="banner-image">
            <img src="https://development.partyonthegreen.com.au/wp-content/uploads/2021/08/WhatsApp-Image-2021-06-29-at-2.52.45-PM-1.jpeg">
        </div>
    </div>

    <section class="section">
        <div class="grid">
            <div class="content">
                <div class="gallery-event-tiles">
                    <?php 
                        $gallery = new WP_Query(array(
                            'post_type' => 'gallery',
                            'meta_key' => 'event_date',
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC',
                        )); ?>

                        <?php if ( $gallery->have_posts() ) : ?>
                            
                            <?php while ( $gallery->have_posts() ) : $gallery->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="gallery-event-tile">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="date"><?php the_field('event_date'); ?></p>
                                    <p class="view-gallery">View Gallery</p>
                                </a>
                            <?php endwhile; ?>
                        
                            <?php wp_reset_postdata(); ?>
                        
                        <?php else : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer();
?>