<?php
    // Theme Option 
    require_once get_theme_file_path(). '/inc/theme-options/codestar-framework.php' ;
    require_once get_theme_file_path(). '/inc/theme-options/bluegoon-custom.php' ;
    
    // theme setup 
	function bluegoon_theme_setup(){
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', [ 'aside','audio', 'video', 'image', 'gallery', 'quote', 'link', 'status', 'chat' ] );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'widgets' );
        add_theme_support( 'menus' );

        register_nav_menus(array(
            'primary-menu'      => __( 'Primary Menu', 'bluegoon' ),
        ));
    }
    add_action( 'after_setup_theme', 'bluegoon_theme_setup' );


    function bluegoon_assets(){
        wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style( 'fonts-googleapis', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome.css' );
        wp_enqueue_style( 'tooplate-style', get_template_directory_uri().'/assets/css/tooplate-style.css' );
        wp_enqueue_style( 'owl', get_template_directory_uri().'/assets/css/owl.css' );
        wp_enqueue_style( 'lightbox', get_template_directory_uri().'/assets/css/lightbox.css' );
        wp_enqueue_style( 'main-style', get_stylesheet_uri() );


        // wp_enqueue_script( 'jquery-min', get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js', [ 'json' ], '1.0.0', true );
        wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',[ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/isotope.min.js', [ 'jquery' ], '1.0.0', time() );
        wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assets/js/owl-carousel.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'lightbox', get_template_directory_uri().'/assets/js/lightbox.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', [ 'jquery' ], '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'bluegoon_assets' );

    // Post type file linkup
    require_once get_theme_file_path(). '/inc/post-type/gallery-post-type.php' ;