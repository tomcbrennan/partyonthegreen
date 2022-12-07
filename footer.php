        <footer class="footer">
            <div class="footer-inner">
                <div class="grid">
                    <div class="content">
                        <a class="logo" href="?p=14">
                            <img src="https://development.partyonthegreen.com.au/wp-content/uploads/2021/08/potg-logo.svg" alt="Party On The Green">
                        </a>
                        <div class="contact-details">
                            <a href="mailto:<?php the_field('email_address', 'option'); ?>" target="_blank">
                                <i class="fas fa-envelope"></i>
                                <?php the_field('email_address', 'option'); ?>
                            </a>
                            <a href="tel:<?php the_field('phone_number', 'option'); ?>" target="_blank">
                                <i class="fas fa-phone-alt"></i>
                                <?php the_field('phone_number', 'option'); ?>
                            </a>
                        </div>
                        <nav class="main-navigation footer-navigation">
                                    
                            <?php wp_nav_menu( array( 
                                'theme_location' => 'footer', 
                                'menu_class' => 'footer-navigation', 
                                'fallback_cb' => false 
                                )); ?>
                        </nav>
                        <div class="socials">
                            <a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-copyright">
            <div class="grid">
                <div class="content">
                    <div class="copyright">
                        © Party on the Green <?php echo get_the_date('Y'); ?>
                    </div>
                    <a class="tb-logo" href="https://tbcreative.design" target="_blank">
                        Designed & built by <img src="/wp-content/themes/partyonthegreen/images/tb-logo-round.svg">
                    </a>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://kit.fontawesome.com/0e24537e5f.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script>
            AOS.init({
                once: true,
                delay: 100,
                duration: 800,
            });
        </script>

        <script>
            $(document).ready(function(){
                $('.testimonials-tiles').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    pauseOnFocus: false,
                    pauseOnHover: false,
                    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left fa-2x"></i></button>',
                    nextArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-right fa-2x"></i></button>',
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                            }
                        },
                        {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            }
                        },
                    ]
                });
            });
        </script>

        <script>
            var acc = document.getElementsByClassName("accordion-question");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>
    </body>
</html>