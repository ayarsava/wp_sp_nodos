<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spnodos
 */

?>

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
<section id="content" class="uk-section page">
	<div class="layout">
	<?php the_content(); ?>
	</div>
</section>



