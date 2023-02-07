<?php 

    // ACF Option Page

    if( function_exists( 'acf_add_options_page' ) )
    {
        acf_add_options_page(
            array(
                'page_title'    => 'Zombiz Options',
                'menu_title'    => 'Zombiz Options',
                'menu_slug'     => 'zombiz-options'
            )
        );
        acf_add_options_sub_page(array(
            'page_title'    => 'Topbar',
            'menu_title'    => 'Topbar',
            'parent_slug'   => 'zombiz-options'
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Features Area',
            'menu_title'    => 'Features',
            'parent_slug'   => 'zombiz-options'
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'About',
            'menu_title'    => 'About',
            'parent_slug'   => 'zombiz-options'
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Services',
            'menu_title'    => 'Services',
            'parent_slug'   => 'zombiz-options'
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Footer',
            'menu_title'    => 'Footer',
            'parent_slug'   => 'zombiz-options'
        ));

    }

















?>