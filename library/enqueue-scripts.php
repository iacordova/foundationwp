<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

    // Deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false );

    // Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
    wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.0', false );

    // CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
    // wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

    // Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );

    // If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
    // It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
    wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '5.5.1', true );
    
    // jQuery Parallax plugin includes
    wp_register_script( 'parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array('jquery'), '1.1.3', true );
    wp_register_script( 'localscroll', get_template_directory_uri() . '/js/jquery.localscroll-1.2.7-min.js', array('jquery'), '1.2.7', true );
    wp_register_script( 'scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo-1.4.2-min.js', array('jquery'), '1.4.2', true );

    // Custom JavaScripts
    wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '0.0.1', true );

    // Enqueue all registered scripts
    wp_enqueue_script('modernizr');
    wp_enqueue_script('fastclick');
    wp_enqueue_script('jquery');
    wp_enqueue_script('foundation');
    wp_enqueue_script('parallax');
    wp_enqueue_script('localscroll');
    wp_enqueue_script('scrollTo');
    wp_enqueue_script('scripts');

  }

  add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

?>