<?php

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

?>