<?php get_header(); ?>

<section class="main-section">
    <div class="container">
        <div class="col-8 col-xs-12 align-center">
            <?php
            if (have_posts()) :
            while (have_posts()) :
                the_post();
                    the_content();
            endwhile;
            endif;
            get_sidebar();
            ?>
            <hr/>
        </div>
    </div>

<?php get_footer(); ?>