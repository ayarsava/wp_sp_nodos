<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spnodos
 */

get_header();
?>

	<main id="primary" class="site-main">
    <!--Hero-->
    <section id="hero" class="uk-section uk-background-primary uk-light uk-padding-remove-bottom">
        <div class="hero-inner uk-container">
            <?php the_title( '<h1 class="hero-title uk-width-4-5@m uk-animation-slide-left">', '</h1>' ); ?>
            <?php if ( has_excerpt() ) : ?>
            <div class="hero-text uk-width-2-3@m">
                <p><?php the_excerpt();?></p>
            </div>
            <?php endif; ?>
            <div class="go-down uk-visible@s uk-flex uk-flex-center uk-flex-middle uk-animation-toggle" tabindex="0">
            <a href="#content" class="uk-animation-fast uk-animation-slide-top" uk-scroll><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" uk-svg width="15"></a>
            </div>
        </div>
    </section>              

    <!--PAGE-->
    <section id="listado" class="uk-section page">
        <div class="uk-text-light">

            <?php 
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
            
            <?php if ( $wpb_all_query->have_posts() ) : ?>
            
            <ul class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@m uk-text-small" uk-grid uk-height-match="target: > li"  uk-margin>
                        
            
                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
                    get_template_part('layouts/card');
                endwhile; ?>
                <!-- end of the loop -->
            
            </ul>
            
                <?php wp_reset_postdata(); ?>
            
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            </main><!-- #main -->
        </div>
    </section>

<?php
get_footer();
