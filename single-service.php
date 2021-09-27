<?php
    get_header();
?>
<main class="main single-service-page">
    <div class="page-banner">
        <div class="page-banner-content">
            <div class="banner-text">
                <h1><?php the_title(); ?></h1>
                <?php if(get_field('banner_subheading')): ?>
                    <h4> <?php the_field('banner_subheading'); ?> </h4>
                <?php endif; ?>
                <div class="banner-button">
                    <a href="/contact-us" class="btn btn-secondary">Enquire Now</a>
                </div>
            </div>
        </div>
        <div class="banner-image">
            <?php if(get_the_post_thumbnail_url()): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>">
                <?php endif; ?>
        </div>
    </div>

    <?php if(get_field('about_the_service')): ?>
        <section class="section about-service">
            <div class="grid">
                <div class="content">
                    <div class="about-service-title">
                        <h2>About our <br><?php the_title(); ?></h2>
                    </div>
                    <div class="about-service-text">
                        <?php the_field('about_the_service'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="section service-types">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L80,112C160,128,320,160,480,197.3C640,235,800,277,960,298.7C1120,320,1280,320,1360,320L1440,320L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
        <div class="grid">
            <div class="content">
                <?php if( have_rows('service_details') ):
                    
                    while( have_rows('service_details') ) : the_row();
                    $service_name = get_sub_field('service_name');
                    $service_description = get_sub_field('service_description');
                    $service_pricing = get_sub_field('service_pricing');
                    $service_image = get_sub_field('service_image');

                    ?>
                        <div class="service-type-tile">
                            <div class="service-type-content">
                                <h3><?php echo $service_name; ?></h3>
                                
                                <p><?php echo $service_description; ?></p>
                                
                                <div class="service-type-pricing">
                                    <?php echo $service_pricing; ?>
                                </div>
                               
                                <a href="/contact-us" class="btn btn-primary">Enquire Now</a>
                            </div>
                            <div class="service-type-image" style="background: url(<?php echo $service_image; ?>);">
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>



    <section class="section view-services">
        <div class="grid">
            <div class="content">
                <h2>Have a question about our Services?</h2>
                <a class="btn btn-secondary" href="/faqs">
                    Read our FAQs
                </a>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer();
?>