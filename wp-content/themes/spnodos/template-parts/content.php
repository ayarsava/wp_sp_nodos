<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spnodos
 */

?>


<!--Hero-->
<section id="hero" class="uk-section uk-background-primary uk-light uk-padding-remove-bottom">
	<div class="hero-inner uk-container">
		<?php the_title( '<h1 class="hero-title uk-width-2-3@m uk-animation-slide-left">', '</h1>' ); ?>
		<?php 
		$categories = get_the_category();
		$separator = ' ';
		$output = '';
		if ( ! empty( $categories ) ) {
			echo '<div class="categorias">';
			foreach( $categories as $category ) {
				$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '" class="uk-badge badge-lg badge-soft-info uk-border-pill uk-text-bold">' . esc_html( $category->name ) . '</a>' . $separator;
			}
			echo trim( $output, $separator );
			echo '</div>';
		}
		?>
		<?php if ( has_excerpt() ) : ?>
		<div class="hero-text uk-width-2-3@m">
			<p><?php the_excerpt();?></p>
		</div>
		<?php endif; ?>
		<div class="go-down uk-visible@s uk-flex uk-flex-center uk-flex-middle uk-animation-toggle" tabindex="0">
		<a href="#content" class="uk-animation-fast uk-animation-slide-top" uk-scroll><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" uk-svg width="15"></a>
		</div>
	</div>
	<!--Hero Media-->
    <div id="hero-media" style="background-color: #f1f1f1;">
        <div class="media-wrapper uk-clearfix">
		<?php the_post_thumbnail('full', array('class' => 'media')); ?>
        </div>
    </div>
</section>              

<!--PAGE-->
<section id="content" class="uk-section page">
	<div class="layout">
	<?php the_content(); ?>
	</div>
</section>