<?php
 
 function projektas_register_styles()
{
    wp_enqueue_style('projektas-template-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('projektas-owl-style', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), null, 'all');
    wp_enqueue_style('projektas-owl-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", array(), null, 'all');
    wp_enqueue_style('projektas-owl-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css", array(), null, 'all');
    wp_enqueue_style('projektas-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css", array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'projektas_register_styles');



function projektas_register_scripts()
{
    wp_enqueue_script('projektas-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), null, 'all', true);
    wp_enqueue_script('projektas-owl-script', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), null, 'all', true);
    wp_enqueue_script('projektas-script', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'projektas_register_scripts');


?>