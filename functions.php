<?php 

    function potg_files(){
        wp_enqueue_style('theme-info', get_stylesheet_uri());
        wp_enqueue_style('custom-styling', get_theme_file_uri('/css/custom.css'));
        wp_enqueue_style('custom-icons-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('custom_font_google', '//fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700');
        wp_enqueue_script('main_js', get_theme_file_uri('/js/main.js'), NULL, '1.0', false);
    }

    add_action('wp_enqueue_scripts','potg_files');

    
    function potg_features(){
        add_theme_support('title-tag');
    }
    
    add_action('after_setup_theme', 'potg_features');

    
    function potg_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'potg_post_thumbnails' );

    
    function potg_theme_setup() {
        register_nav_menus( array( 
          'header' => 'Header menu', 
          'footer' => 'Footer menu' 
        ) );
    }
      
    add_action( 'after_setup_theme', 'potg_theme_setup' );

    
    
    
    
    function create_post_types() {
 
        register_post_type('service',
            array(
                'labels' => array(
                    'name' => __( 'Services' ),
                    'singular_name' => __( 'Service' )
                ),
                'public' => true,
                'has_archive' => true,
                'supports' => array( 'title', 'editor', 'thumbnail'),
                'show_in_rest' => true,
                'menu_icon' => 'dashicons-products',
                'rewrite' => array('slug' => 'services'),
                'publicly_queryable' => true,
                'query_var' => true,
            )
        );

        register_post_type('gallery',
            array(
                'labels' => array(
                    'name' => __( 'Gallery' ),
                    'singular_name' => __( 'Gallery Event' )
                ),
                'public' => true,
                'has_archive' => true,
                'supports' => array( 'title', 'editor', 'thumbnail'),
                'show_in_rest' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'publicly_queryable' => true,
                'query_var' => true,
            )
        );

        register_post_type('testimonial',
            array(
                'labels' => array(
                    'name' => __( 'Testimonials' ),
                    'singular_name' => __( 'Testimonial' )
                ),
                'exclude_from_search' => true,
                'has_archive' => false,
                'supports' => array( 'title', 'editor'),
                'show_in_rest' => true,
                'menu_icon' => 'dashicons-format-chat',
                'publicly_queryable' => true,
                'query_var' => true,
            )
        );
    }

    add_action( 'init', 'create_post_types' );

    
    
    
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Company Details',
            'menu_title'	=> 'Company Details',
            'menu_slug' 	=> 'company-details',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
    }


    
?>