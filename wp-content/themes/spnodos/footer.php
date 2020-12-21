<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spnodos
 */

?>	
	<footer class="footer uk-section uk-section uk-section-default uk-section-light">
		<div class="uk-container uk-padding-medium">
			
			<div class="uk-text-primary" uk-grid>
				<div class="uk-width-1-5@s">
					<a class="uk-logo uk-animation-slide-top" href="#">
						<img class="uk-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-color.png" alt="Fundación Nodos" width="135">
					</a>
				</div>
				<div class="uk-width-2-5@s">
					<?php
					wp_nav_menu(
						array(
						'theme_location' => 'menu-1',
						'container'       => 'ul',
						'menu_id'        => 'footer-menu',
						'menu_class'	 => 'uk-list uk-text-small',
						)
					);
					?>
				</div>
				<div class="uk-width-1-5@s">
					<?php
						wp_nav_menu(
							array(
							'theme_location' => 'smi-social',
							'menu_class'	 => 'redes',
							)
						);
					?>
				</div>
				<div class="uk-width-1-5@s">
					<address>
						<small>Av. Madero 942 4º piso<br>CABA, Argentina</small>
					</address>
				</div>
			</div>                            
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery(function($){
	$(document).ready(function(){
		if($('#redes').length){
			$('.uk-inline a').attr('uk-icon', 'facebook');
		}
	});
});
</script>
</body>
</html>
