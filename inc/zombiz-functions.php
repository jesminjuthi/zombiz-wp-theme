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
            'page_title'    => 'General Settings',
            'menu_title'    => 'General Settings',
            'parent_slug'   => 'zombiz-options'
        ));

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
            'page_title'    => 'Counter',
            'menu_title'    => 'Counter',
            'parent_slug'   => 'zombiz-options'
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Project',
            'menu_title'    => 'Project',
            'parent_slug'   => 'zombiz-options'
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Footer',
            'menu_title'    => 'Footer',
            'parent_slug'   => 'zombiz-options'
        ));

    }


    // BreadCrumb

    function get_the_breadcrumb() {
        global $post;
        echo '<ol class="breadcrumb">';
        if (!is_home()) {
            echo '<li class="breadcrumb-item"><a href="';
            echo esc_url(home_url());
            echo '">';
            echo 'Home';
            echo '</a></li>';
            if (is_category() || is_single()) {
                if(!is_single()) {
                    echo '<li class="breadcrumb-item active">';
                    single_cat_title();
                    echo '</li><li>';
                } else {
                    $get_cat = get_the_category();
                    echo '<li class="breadcrumb-item active"><a href="' . get_category_link($get_cat[0]->term_id) . '">' . $get_cat[0]->name . '</a></li><li>';
                }

                if (is_single()) {
                    echo '</li><li class="text-muted mx-2"> / </li><li class="breadcrumb-item active">';
                    the_title();
                    echo '</li>';
                }
            } elseif (is_page()) {
                if($post->post_parent){
                    $anc = get_post_ancestors( $post->ID );
                    $title = get_the_title();
                    foreach ( $anc as $ancestor ) {
                        $output = '<li class="breadcrumb-item"><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="breadcrumb-item active">/</li>';
                    }
                    echo $output;
                    echo '<strong title="'.$title.'"> '.$title.'</strong>';
                } else {
                    echo '<li class="breadcrumb-item active">'.get_the_title().'</li>';
                }
            }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo'<li class="breadcrumb-item active">Author Archive'; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo '<li class="breadcrumb-item active">Blog Archives'; echo'</li>';}
        elseif (is_search()) {echo'<li class="breadcrumb-item active">Search Results'; echo'</li>';}
        elseif (!is_single() && is_home()) {echo '<li class="breadcrumb-item"><a href="';
            echo esc_url(home_url());
            echo '">';
            echo 'Home';
            echo '</a></li>';
            echo '<li class="text-muted mx-2"> / </li><li class="breadcrumb-item active">';
            echo get_the_title(get_option('page_for_posts', true));
            echo '</li>';
        }
        echo '</ol>';
    }
















?>