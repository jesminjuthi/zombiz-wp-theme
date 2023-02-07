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
    }

















?>