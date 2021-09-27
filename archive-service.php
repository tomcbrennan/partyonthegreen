
<?php 
    get_header();
?>

<main class="main">
    <div class="page-banner">
        <div class="page-banner-content">
            <div class="banner-text">
                <h1>Services</h1>
                <h4>View our full list of services below!</h4>
            </div>
        </div>
        <div class="banner-image">
            <img src="https://development.partyonthegreen.com.au/wp-content/uploads/2021/08/WhatsApp-Image-2021-05-14-at-3.10.12-PM-2.jpeg">
        </div>
    </div>

    <section class="section services-page-list">
        <div class="grid">
            <div class="content">
                <div class="services-tiles">
                    <?php 
                        $services = new WP_Query(array('post_type'=>'service')); ?>
                        
                        <?php if ( $services->have_posts() ) : ?>
                        
                            <?php while ( $services->have_posts() ) : $services->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="services-tile">
                                    <h3><?php the_title(); ?></h3>
                                    <?php if(get_the_post_thumbnail_url()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    <?php endif; ?>
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