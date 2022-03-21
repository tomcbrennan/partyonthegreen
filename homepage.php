<?php
    /**
    * Template Name: Homepage
    */
?>


<?php
    get_header();
?>

<main class="main main-home">
    <div class="home-banner" style="background: url(<?php the_field('home_banner'); ?>); background-size: cover; background-repeat: no-repeat; background-position: bottom center;" alt="Party on the Green">
        <div class="banner-content">
            <div class="home-banner-logo">
                <?php if( get_field('home_banner_logo') ): ?>
                    <img src="<?php the_field('home_banner_logo'); ?>" />
                <?php endif; ?>
            </div>
            <div class="home-banner-title">
                <h1><?php the_field('home_banner_heading'); ?></h1>
            </div>
            <div class="home-banner-cta">
                <a class="btn btn-secondary" href="<?php echo get_post_type_archive_link('service'); ?>">View Our Services</a>
            </div>
        </div>
    </div>

    <section class="section home-services">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
            <path fill="#f4f4f4" fill-opacity="1" d="M0,192L60,202.7C120,213,240,235,360,245.3C480,256,600,256,720,240C840,224,960,192,1080,186.7C1200,181,1320,203,1380,213.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
        <div class="grid">
            <div class="content">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 24h-2v-24h2v24zm18-16l-16-6v12l16-6z"/></svg>
                    Our Services
                </h2>

                <div class="services-tiles">
                    <?php 
                        $services = new WP_Query(
                            array(
                                'post_type'=>'service',
                                'posts_per_page' => 2,
                            )
                        ); 
                    ?>
                        
                        <?php if ( $services->have_posts() ) : ?>
                        
                            <?php while ( $services->have_posts() ) : $services->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="services-tile">
                                    <h3><?php the_title(); ?></h3>
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                </a>
                            <?php endwhile; ?>
                        
                            <?php wp_reset_postdata(); ?>
                        
                        <?php else : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section home-about">
        <div class="grid">
            <div class="content">
                <div class="about-columns">
                    <div class="about-us-image c-1-2">
                        <?php if( get_field('about_us_image') ): ?>
                            <img src="<?php the_field('about_us_image'); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="about-us-text c-1-2">
                        <h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 24h-2v-24h2v24zm18-16l-16-6v12l16-6z"/></svg>
                            About Us
                        </h2>
                        <div class="text-container">
                            <?php the_field('about_us_text');?>
                        </div>
                        <a class="btn btn-primary" href="<?php echo esc_url(get_page_link(19)); ?>">More About Us</a>
                    </div>
                </div>
                <?php

                if( have_rows('partners') ): ?>
                    <div class="partners">
                        <?php while( have_rows('partners') ) : the_row(); ?>

                            <?php $partner = get_sub_field('partner'); ?>
                            <?php $url = $partner['url']; ?>
                            <?php $partner_alt = $partner['alt']; ?>

                            <div class="partner">
                                <img src="<?php echo $url; ?>" alt="<?php echo esc_attr($partner_alt); ?>">
                            </div>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="section home-testimonials">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
            <path fill="#ffffff" fill-opacity="1" d="M0,320L80,298.7C160,277,320,235,480,229.3C640,224,800,256,960,266.7C1120,277,1280,267,1360,261.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
        <div class="grid">
            <div class="content">
                <h2>We Love Providing The Fun For Our Clients!</h2>
                <div class="testimonials-tiles">
                    <?php 
                        $testimonials = new WP_Query(array('post_type'=>'testimonial')); ?>
                        
                        <?php if ( $testimonials->have_posts() ) : ?>
                        
                            <!-- the loop -->
                            <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                                <div class="testimonials-tile">
                                    <p class="testimonial-text"><?php the_content(); ?></p>
                                    <p class="testimonial-name"><?php the_title(); ?></p>
                                </div>
                            <?php endwhile; ?>
                            <!-- end of the loop -->
                        
                            <?php wp_reset_postdata(); ?>
                        
                    <?php else : ?>
                    <?php endif; ?>
                </div>
                <p class="swipe">Swipe for more <img src="<?php echo get_theme_file_uri();?>/images/swipe.svg"></p>
            </div>
        </div>
    </section>

    <section class="section home-gallery">
        <div class="grid">
            <div class="content">
                <div class="home-gallery-heading">
                    <h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 24h-2v-24h2v24zm18-16l-16-6v12l16-6z"/></svg>
                        Gallery
                    </h2>
                    <a href="/gallery" class="btn btn-primary home-gallery-btn-desktop">View Full Gallery</a>
                </div>
                <?php the_content(); ?>
                <a href="<?php echo get_post_type_archive_link('gallery'); ?>" class="btn btn-primary home-gallery-btn-mobile">View Full Gallery</a>
            </div>
        </div>
    </section>

    <section class="section socials-banner">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
            <path fill="#f4f4f4" fill-opacity="1" d="M0,288L60,282.7C120,277,240,267,360,272C480,277,600,299,720,304C840,309,960,299,1080,282.7C1200,267,1320,245,1380,234.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
        <div class="grid">
            <div class="content">
                <h3>
                    Don't Forget To Follow Our Socials!
                </h3>
                <div class="socials-container">
                    <a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section contact">
        <div class="grid">
            <div class="content">
                <div class="contact-columns">
                    <div class="contact-left c-2-5">
                        <h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 24h-2v-24h2v24zm18-16l-16-6v12l16-6z"/></svg>
                            Get In Touch
                        </h2>
                        <div class="contact-details">
                            <a href="mailto:<?php the_field('email_address', 'option'); ?>" target="_blank">
                                <p>
                                    <i class="fas fa-envelope"></i>
                                    <?php the_field('email_address', 'option'); ?>
                                </p>
                            </a>
                            <a href="tel:<?php the_field('phone_number', 'option'); ?>" target="_blank">
                                <p>
                                    <i class="fas fa-phone-alt"></i>
                                    <?php the_field('phone_number', 'option'); ?>
                                </p>
                            </a>
                        </div>
                        <div class="contact-socials">
                            <h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 24h-2v-24h2v24zm18-16l-16-6v12l16-6z"/></svg>
                                Follow The Fun
                            </h3>
                            <a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="contact-right c-3-5">
                        <?php wpforms_display(131); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
    get_footer();
?>