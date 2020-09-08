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
    }
    echo '</div>';
    echo '<div class="card-body"><h3 class="uk-card-title uk-text-bold"><span class="uk-link-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'. get_the_title() .'</a></span></h3>';
    echo '<p class="uk-visible@s">'. wp_trim_words(get_the_content(), 25) .'</p>';
    echo '';
    foreach($categories as $category) {
    echo '<span class="uk-badge badge-lg badge-soft-info uk-border-pill uk-text-bold" style="margin:0 .5rem .5rem 0;">' . $category->name . '</span>';
    }
    echo '</div>';
    echo '</li>';