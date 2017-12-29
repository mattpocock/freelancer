<?php get_header(); ?>

<section class="main-section">
    <div class="container">
        <div class="col-8 col-xs-12 align-center">
            <img class="page-heading__image"
            src="
            <?php 
                if (get_the_title() === "Translating") {
                    echo "https://i0.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5867.jpg?resize=1200%2C796";
                } else if (get_the_title() === "Writing / Editing") {
                    echo "https://i0.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5867.jpg?resize=1200%2C796";
                } else if (get_the_title() === "Photography") {
                    echo "https://i0.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5867.jpg?resize=1200%2C796";
                }
                
            ?>
            "/>

            <h2 class="page-heading"><?php the_title()?></h2>
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