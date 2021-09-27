<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <title>Party On The Green</title>
</head>
    <body>
        <header class="header">
            <div class="grid">
                <div class="content">
                    <a class="logo" href="/home">
                        <img src="https://development.partyonthegreen.com.au/wp-content/uploads/2021/08/potg-logo.svg" alt="Party On The Green">
                    </a>  
                    <nav class="main-navigation desktop-navigation">
                        
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'header', 
                            'menu_class' => 'primary-navigation', 
                            'fallback_cb' => false 
                            )); 
                        ?>
                        
                </nav>

                <div class="hamburger">
                    <div class="hamburger-title">
                        Menu
                    </div>
                    <div class="hamburger-lines">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>

                </div>
            </div>

            <nav class="main-navigation mobile-navigation">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'header', 
                    'menu_class' => 'primary-navigation', 
                    'fallback_cb' => false 
                    )); 
                ?>
            </nav>
            <div class="mobile-navigation-contact">
                <div class="contact-container">
                    <!-- <a href="/contact-us" class="mobile-contact"><i class="fas fa-phone-alt fa-2x"></i></a> -->
                    <a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                </div>
            </div>
        </header>