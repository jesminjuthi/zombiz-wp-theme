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

    // Team 

    function zombiz_team_cpt() {
        
        $args = [
            'label'  => 'Team Members',
            'labels' => [
                'menu_name'             => 'Team Members',
                'add_new'               => 'Add Team Member',
                'add_new_item'          => 'Add new team member',
                'new_item'              => 'New team member',
                'edit_item'             => 'Edit team member',
                'view_item'             => 'View team member',
                'update_item'           => 'View team member',
                'all_items'             => 'All team members',
                'search_items'          => 'Search team members',
                'not_found'             => 'No team members found',
                'not_found_in_trash'    => 'No team members found in Trash',
                'featured_image'        => 'Team Member Image', 'zombiz',
                'set_featured_image'    => 'Set team member image',
                'remove_featured_image' => 'Remove team member image',
                'use_featured_image'    => 'Use as team member image',
                'insert_into_item'      => 'Insert into team member',
                'uploaded_to_this_item' => 'Uploaded to this team member',
                'items_list'            => 'Team Members list',
                'items_list_navigation' => 'Team Members list navigation',
                'filter_items_list'     => 'Filter team members list',
            ],
            'public'                => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-admin-users',
            'supports'              => [
                'title',
                'editor',
                'thumbnail',
            ],
            'taxonomies'            => [
                'team_category',
            ],
            'rewrite'               => true,
            'has_archive'           => true,
        ];
	        register_post_type( 'team_member', $args );
        }

        add_action( 'init', 'zombiz_team_cpt' );

        // Team Member Taxonomy

        $labels = array(
            'name' => 'Team Categories',
            'singular_name' => 'Team Category',
            'menu_name' => 'Team Categories',
        );
        
        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => true,
        );
        
        register_taxonomy('team_category', 'team_member', $args);

    // Pricing Table 

    function zombiz_price_cpt() {
        
        $args = [
            'label'  => 'Pricing Table',
            'labels' => [
                'menu_name'             => 'Pricing Table',
                'add_new'               => 'Add price',
                'add_new_item'          => 'Add new price',
                'new_item'              => 'New price',
                'edit_item'             => 'Edit price',
                'view_item'             => 'View price',
                'update_item'           => 'View price',
                'all_items'             => 'All prices',
                'search_items'          => 'Search prices',
                'not_found'             => 'No pricing table found',
                'not_found_in_trash'    => 'No price found in Trash',
                'featured_image'        => 'Price Image', 'zombiz',
                'set_featured_image'    => 'Set price image',
                'remove_featured_image' => 'Remove price image',
                'use_featured_image'    => 'Use as price image',
                'insert_into_item'      => 'Insert into price',
                'uploaded_to_this_item' => 'Uploaded to this price',
                'items_list'            => 'Pricing list',
                'items_list_navigation' => 'Pricing list navigation',
                'filter_items_list'     => 'Filter pricing list',
            ],
            'public'                => true,
            'hierarchical'          => true,
            'menu_icon'             => 'data:image/svg+xml;base64,PCEtLSBHZW5lcmF0ZWQgYnkgSWNvTW9vbi5pbyAtLT4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjY0MCIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA2NDAgNTEyIj4KPHRpdGxlPjwvdGl0bGU+CjxnIGlkPSJpY29tb29uLWlnbm9yZSI+CjwvZz4KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTYxNiAwaC0xOTJjLTEzLjIgMC0zMS42MzcgNy42MzctNDAuOTcxIDE2Ljk3MWwtMjM4LjA1OCAyMzguMDU4Yy05LjMzNCA5LjMzNC05LjMzNCAyNC42MDcgMCAzMy45NDFsMjA2LjA1OSAyMDYuMDU5YzkuMzM0IDkuMzM0IDI0LjYwNyA5LjMzNCAzMy45NDEgMGwyMzguMDU5LTIzOC4wNTljOS4zMzMtOS4zMzMgMTYuOTctMjcuNzcgMTYuOTctNDAuOTd2LTE5MmMwLTEzLjItMTAuOC0yNC0yNC0yNHpNNDk2IDE5MmMtMjYuNTEgMC00OC0yMS40OS00OC00OHMyMS40OS00OCA0OC00OCA0OCAyMS40OSA0OCA0OC0yMS40OSA0OC00OCA0OHoiPjwvcGF0aD4KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTY0IDI3MmwyNzItMjcyaC00MGMtMTMuMiAwLTMxLjYzNyA3LjYzNy00MC45NzEgMTYuOTcxbC0yMzguMDU4IDIzOC4wNThjLTkuMzM0IDkuMzM0LTkuMzM0IDI0LjYwNyAwIDMzLjk0MWwyMDYuMDU5IDIwNi4wNTljOS4zMzQgOS4zMzQgMjQuNjA3IDkuMzM0IDMzLjk0MSAwbDE1LjAyOS0xNS4wMjktMjA4LTIwOHoiPjwvcGF0aD4KPC9zdmc+Cg==',
            'supports'              => [
                'title',
            ],
            'taxonomies'            => [
                'pricing_category',
            ],
            'rewrite'               => true,
            'has_archive'           => true,
        ];
	        register_post_type( 'price', $args );
        }

        add_action( 'init', 'zombiz_price_cpt' );

        // Pricing Table Taxonomy

        $labels = array(
            'name' => 'Package Categories',
            'singular_name' => 'Package Category',
            'menu_name' => 'Package Categories',
        );
        
        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => true,
        );
        
        register_taxonomy('pricing_category', 'price', $args);
        





































?>