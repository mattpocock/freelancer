<?php
/*
* Plugin Name: Freelancer Gallery
* Description: Gallery for Freelancer
* Author: Matt Pocock
* Author URI: https://mattpocock.github.io
*/

class RenderGallery
{

    function renderBeginning() {
        echo '<div class="freelancer-gallery">';
    }

    function renderImage ($image, $caption) {
        echo '<div class="freelancer-gallery__box">';
        echo    '<a class="freelancer-gallery__link">';
        echo        '<img src="'.$image.'" class="freelancer-gallery__thumbnail"/>';
        echo    '</a>';
        echo    '<div class="freelancer-image">';
        echo        '<div class="container">';
        echo            '<img src="'.$image.'"/>';
        echo            '<div class="freelancer-image__caption">';
        echo                '<p>'.$caption.'</p>';
        echo            '</div>';
        echo        '</div>';
        echo    '</div>';
        echo '</div>';
    }

    function renderEnd() {
        echo '</div>';
    }
}

function create_gallery( $atts ) {

    $data = shortcode_atts( array(
        'image' => '',
        'caption' => ''
    ), $atts);

    // Checks if an image has been passed
    if (!$atts['image']) {
        echo 'No image link in shortcode';
    } else {
        $gallery = new RenderGallery;
    
        // turn inputs into arrays
        $image_array = explode(',', $atts['image']);
        $caption_array = explode(',', $atts['caption']);
        $gallery->renderBeginning();

        foreach( $image_array as $image) {
            static $index = 0;
            $caption;
            if (isset($caption_array[$index])) {
                $caption = $caption_array[$index];
                $index++;
            } else {
                $caption = "";
            }
            
            $gallery->renderImage( $image, $caption);
        }

        $gallery->renderEnd();
    }

}

add_shortcode('freelancer-gallery', 'create_gallery');

function freelancerGalleryStylesheet() 
{
    wp_enqueue_style( 'freelancer-gallery', plugins_url('/freelancer-gallery/gallery.css'), array(), null );
}

function freelancerGalleryScripts() {
    wp_enqueue_script( 'gallery-js', plugins_url('/freelancer-gallery/gallery-js.js'), array(), null );
}

add_action('wp_print_styles', 'freelancerGalleryStylesheet');  
add_action('wp_print_scripts', 'freelancerGalleryScripts'); 



?>
