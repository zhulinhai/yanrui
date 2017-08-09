<?php
    if ( in_category('h5') ) {
        include(TEMPLATEPATH . '/single-h5.php');
    } else if (in_category('design')) {
        include(TEMPLATEPATH . '/single-design.php');
    } else if (in_category('media')) {
        include(TEMPLATEPATH . '/single-media.php');
    }
?>