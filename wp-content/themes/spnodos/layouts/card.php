<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spnodos
 */

?>

<?php 
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    $categories = get_the_category();

    echo '<li>';
    echo '<div class="uk-cover-container card-image-wrapper">';

    if ($src) {
        echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><img src="'. $src[0] .'" alt="" uk-cover></a>';
    } else {
        echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><img src="' . get_template_directory_uri() . '/assets/img/forma-06-mano.png" alt="" style="background-color:#FFF;" uk-cover></a>';
    }
    echo '</div>';
    echo '<div class="card-body"><h3 class="uk-card-title uk-text-bold uk-margin-right uk-margin-small-top"><span class="uk-link-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'. get_the_title() .'</a></span></h3>';
    echo '<p class="uk-visible@s">'. wp_trim_words(get_the_content(), 25) .'</p>';
    echo '';
    foreach($categories as $category) {
    echo '<span class="uk-badge badge-sm badge-soft-info uk-border-pill uk-text-bold" style="padding: 2px 10px; margin:0px .5rem .2rem 0px;">' . $category->name . '</span>';
    }
    echo '</div>';
    echo '</li>';