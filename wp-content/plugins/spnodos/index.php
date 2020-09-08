<?php
/*
Plugin Name: spnodos
Description: Plugin de desarrollo propio para Nodos
Author: Ayar Sava
*/

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
    function block_styles_register_block_styles() {
        /**
         * Register stylesheet
         */
        wp_register_style(
            'block-styles-stylesheet',
            plugins_url( 'style.css', __FILE__ ),
            array(),
            '1.1'
        );

        /**
         * Register block style
         */
        register_block_style(
            'core/image',
            array(
                'name'         => 'is-wide',
                'label'        => 'Ancho completo',
                'style_handle' => 'block-styles-stylesheet',
            )
        );
    }

    add_action( 'init', 'block_styles_register_block_styles' );
}

function get_ajax_posts() {
    // Query Arguments
    $args = array(
        'post_type' => array('post'),
        'post_status' => array('publish'),
        'posts_per_page' => 40,
        'nopaging' => true,
        'order' => 'DESC',
        'orderby' => 'date',
        'cat' => 1,
    );

    // The Query
    $ajaxposts = get_posts( $args ); // changed to get_posts from wp_query, because `get_posts` returns an array

    echo json_encode( $ajaxposts );

    exit; // exit ajax call(or it will return useless information to the response)
}

// Fire AJAX action for both logged in and non-logged in users
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
add_action('wp_ajax_nopriv_get_ajax_posts', 'get_ajax_posts');