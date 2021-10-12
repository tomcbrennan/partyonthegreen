<?php 
    /**
    * Template Name: Contact
    */
?>
<?php 
    get_header();
?>

<div class="main contact-page">
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

    <?php if(get_field('contact_description')): ?>
        <section class="section contact-content">
            <div class="grid">
                <div class="content">
                    <div class="contact-title">
                        <h2>Have an upcoming event?</h2>
                    </div>
                    <div class="contact-text">
                        <?php the_field('contact_description'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="section contact">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
            <path fill="#ffffff" fill-opacity="1" d="M0,160L60,144C120,128,240,96,360,69.3C480,43,600,21,720,16C840,11,960,21,1080,32C1200,43,1320,53,1380,58.7L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
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
</div>



<?php
    get_footer();
?>