<?php
    get_header();
?>

<main class="main single-gallery-page">

    <section class="section">
        <div class="grid">
            <div class="content">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <section class="section go-back">
        <div class="grid">
            <div class="content">
                <a href="/gallery" class="btn btn-primary">Return to Gallery</a>
            </div>
        </div>
    </section>
</main>



<?php
    get_footer();
?>