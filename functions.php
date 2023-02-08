<?php 
    require_once get_theme_file_path( 'inc/zombiz-functions.php' );
    // Theme Supports
    function zombiz_theme_setup() {
        define( 'VERSION', '1.0' );
        load_theme_textdomain('zombiz');
        add_theme_support('title-tag');
        add_theme_support('custom-logo', array(
            'height'        => 100,
            'width'         => 300,
            'flex-width'    => true,
            'flex-height'   => true
        ));
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'primary_menu'  => 'Primary Menu',
            'footer_menu'   => 'Footer Menu'
        ));
    }
    add_action('after_setup_theme', 'zombiz_theme_setup');

    // Theme Assets
    function zombiz_theme_assets() {
        // styles
        wp_enqueue_style('zombiz-font-playfair', '//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i');
        wp_enqueue_style('zombiz-font-poppins', '//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
        wp_enqueue_style('zombiz-font-lato', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
        wp_enqueue_style('zombiz-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-linear-icons', '//cdn.linearicons.com/free/1.0.0/icon-font.min.css');
        wp_enqueue_style('zombiz-animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-hover-min-css', get_template_directory_uri() . '/assets/css/hover-min.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-owl.theme.default-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-bootstrap.min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-bootsnav-css', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), VERSION, 'all');
        wp_enqueue_style('zombiz-core-css', get_stylesheet_uri());

        // scripts
        wp_enqueue_script('zombiz-modernizr-js', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');
        wp_enqueue_script('zombiz-bootstrap.min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('zombiz-bootsnav-js', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), VERSION, true);
        wp_enqueue_script('zombiz-sticky-js', get_template_directory_uri() . '/assets/js/jquery.hc-sticky.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('zombiz-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('zombiz-easing-js', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js');
        wp_enqueue_script('zombiz-owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('zombiz-counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('zombiz-waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('zombiz-jak-menusearch-js', get_template_directory_uri() . '/assets/js/jak-menusearch.js', array('jquery'), VERSION, true);
        wp_enqueue_script('zombiz-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), VERSION, true);
    }
    add_action('wp_enqueue_scripts', 'zombiz_theme_assets');

    // Slider 

    function zombiz_register_post_type() {
        
        $args = [
            'label'  => esc_html__( 'Sliders', 'zombiz' ),
            'labels' => [
                'menu_name'             => 'Slider',
                'add_new'               => 'Add slider',
                'add_new_item'          => 'Add new slider',
                'new_item'              => 'New slider',
                'edit_item'             => 'Edit slider',
                'view_item'             => 'View slider',
                'update_item'           => 'View slider',
                'all_items'             => 'All Sliders',
                'search_items'          => 'Search Sliders',
                'not_found'             => 'No Sliders found',
                'not_found_in_trash'    => 'No Sliders found in Trash',
                'featured_image'        => 'Slider Image', 'zombiz',
                'set_featured_image'    => 'Set slider image',
                'remove_featured_image' => 'Remove slider image',
                'use_featured_image'    => 'Use as slider image',
                'insert_into_item'      => 'Insert into Slider',
                'uploaded_to_this_item' => 'Uploaded to this Slider',
                'items_list'            => 'Sliders list',
                'items_list_navigation' => 'Sliders list navigation',
                'filter_items_list'     => 'Filter Sliders list',
            ],
            'public'                => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-category',
            'supports'              => [
                'title',
                'editor',
                'thumbnail',
            ],
            'taxonomies'            => [
                // 'category', -> it will show the post category
                'slider_category'
            ],
            'rewrite'               => true
        ];
	        register_post_type( 'slider', $args );
        }

        add_action( 'init', 'zombiz_register_post_type' );

    
    // Slider Taxonomy

    $labels = array(
        'name' => 'Slider Categories',
        'singular_name' => 'Slider Category',
        'menu_name' => 'Slider Categories',
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
    );
    
    register_taxonomy('slider_category', 'slider', $args);

    // Projects 

    function zombiz_project_cpt() {
        
        $args = [
            'label'  => 'Projects',
            'labels' => [
                'menu_name'             => 'Projects',
                'add_new'               => 'Add project',
                'add_new_item'          => 'Add new project',
                'new_item'              => 'New project',
                'edit_item'             => 'Edit project',
                'view_item'             => 'View project',
                'update_item'           => 'View project',
                'all_items'             => 'All Projects',
                'search_items'          => 'Search Projects',
                'not_found'             => 'No projects found',
                'not_found_in_trash'    => 'No projects found in Trash',
                'featured_image'        => 'Project Image', 'zombiz',
                'set_featured_image'    => 'Set project image',
                'remove_featured_image' => 'Remove project image',
                'use_featured_image'    => 'Use as project image',
                'insert_into_item'      => 'Insert into project',
                'uploaded_to_this_item' => 'Uploaded to this project',
                'items_list'            => 'Projects list',
                'items_list_navigation' => 'Projects list navigation',
                'filter_items_list'     => 'Filter projects list',
            ],
            'public'                => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-image-filter',
            'supports'              => [
                'title',
                'editor',
                'thumbnail',
            ],
            'taxonomies'            => [
                'project_category',
            ],
            'rewrite'               => true,
            'has_archive'           => true,
        ];
	        register_post_type( 'project', $args );
        }

        add_action( 'init', 'zombiz_project_cpt' );

        // Project Taxonomy

        $labels = array(
            'name' => 'Project Categories',
            'singular_name' => 'Project Category',
            'menu_name' => 'Project Categories',
        );
        
        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => true,
        );
        
        register_taxonomy('project_category', 'project', $args);
        
        





































?>