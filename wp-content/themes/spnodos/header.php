<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spnodos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--Menu Toggle-->
<div class="burguer uk-align-center" uk-scrollspy="cls: uk-animation-scale-up;"><a href="#menu-toggle" uk-icon="icon: menu" uk-toggle></a></div>

<!--Menu-->
<div class="uk-container uk-background-primary uk-light">
	<div id="menu" class="uk-grid menu-wrap" uk-grid>
		<a class="uk-logo uk-width-1-5@m" uk-scrollspy="cls:uk-animation-slide-top; repeat:true;" href="<?php echo get_site_url(); ?>">
			<img class="uk-logo-inverse" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white-horizontal.svg" alt="Fundación Nodos" width="135" uk-svg>
		</a>
		<nav class="menu uk-width-4-5 uk-visible@m uk-navbar-transparent"  uk-scrollspy="cls:uk-animation-slide-top; repeat:true;" >
			<div class="uk-container">
				<div class="uk-visible@m" uk-navbar>
					<div class="uk-navbar-right">
						<?php
						wp_nav_menu(
							array(
							'theme_location' => 'menu-1',
							'container'       => 'ul',
							'menu_id'        => 'main-menu',
							'menu_class'	 => 'uk-navbar-nav',
							)
						);
						?>
					</div>
				</div>
			</div>		
		</nav>
	</div>
</div>

<!--Menu Mobile-->
<div id="menu-toggle" uk-offcanvas="overlay: true">
	<div class="uk-offcanvas-bar uk-background-primary">

		<button class="uk-offcanvas-close" type="button" uk-close></button>
		<?php
		wp_nav_menu(
			array(
			'theme_location' => 'menu-1',
			'container'       => 'ul',
			'menu_id'        => 'mobile-menu',
			'menu_class'	 => 'uk-nav uk-nav-default',
			)
		);
		?>
		<address>
			<small>Av. Madero 942 4º piso<br>CABA, Argentina</small>
		</address>
		
	</div>
</div>



<div id="page" class="site">
