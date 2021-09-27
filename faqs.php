<?php 
    /**
    * Template Name: FAQs
    */
?>
<?php 
    get_header();
?>

<div class="main faqs-page">
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

    <section class="section faqs">
        <div class="grid">
            <div class="content">
                <div class="wp-block-columns">
                    <div class="wp-block-column">
                        <div class="general-faqs" id="general">
                            <h3>General Questions</h3>
                            <?php if( have_rows('general_faqs') ): ?>
                                
                                <?php while( have_rows('general_faqs') ) : the_row(); ?>

                                <?php $general_faqs_question = get_sub_field('faq_question'); ?>
                                <?php $general_faqs_answer = get_sub_field('faq_answer'); ?>
                                

                                <div class="accordion">
                                    <div class="accordion-question">
                                        <h4><?php echo $general_faqs_question; ?></h4>
                                        <div class="accordion-chevron">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                    <div class="accordion-answer-container">
                                        <div class="accordion-answer">
                                            <?php echo $general_faqs_answer; ?>
                                        </div>
                                    </div>
                                </div>
                                

                                <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                        
                        
                        <div class="mobile-mini-golf-faqs" id="mobile-mini-golf">
                            <h3>Mobile Mini Golf Questions</h3>
                            <?php if( have_rows('mobile_mini_golf_faqs') ): ?>
                                
                                <?php while( have_rows('mobile_mini_golf_faqs') ) : the_row(); ?>

                                <?php $general_faqs_question = get_sub_field('faq_question'); ?>
                                <?php $general_faqs_answer = get_sub_field('faq_answer'); ?>
                
                                    
                                <div class="accordion">
                                    <div class="accordion-question">
                                        <h4><?php echo $general_faqs_question; ?></h4>
                                        <div class="accordion-chevron">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                    <div class="accordion-answer-container">
                                        <div class="accordion-answer">
                                            <?php echo $general_faqs_answer; ?>
                                        </div>
                                    </div>
                                </div>
                            

                                <?php endwhile; ?>
                                <?php else : ?>
                            <?php endif; ?>
                        </div>

                        <div class="lawn-games-faqs" id="lawn-games">
                            <h3>Lawn Games Questions</h3>
                            <?php if( have_rows('lawn_games_faqs') ): ?>
                                            
                                <?php while( have_rows('lawn_games_faqs') ) : the_row(); ?>

                                <?php $general_faqs_question = get_sub_field('faq_question'); ?>
                                <?php $general_faqs_answer = get_sub_field('faq_answer'); ?>
                                

                                    <div class="accordion">
                                        <div class="accordion-question">
                                            <h4><?php echo $general_faqs_question; ?></h4>
                                            <div class="accordion-chevron">
                                                <i class="fas fa-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="accordion-answer-container">
                                            <div class="accordion-answer">
                                                <?php echo $general_faqs_answer; ?>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                                <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="wp-block-column jump-to-section-column">
                        <div class="jump-to-section">
                            <h3>FAQ Topics</h2>
                            <a href="#general">General</a>
                            <a href="#mobile-mini-golf">Mobile Mini Golf</a>
                            <a href="#lawn-games">Lawn Games</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

</main>

<?php
    get_footer();
?>