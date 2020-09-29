<?php
/**
 * spnodos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package spnodos
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'spnodos_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function spnodos_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on spnodos, use a find and replace
		 * to change 'spnodos' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'spnodos', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'spnodos' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'spnodos_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'spnodos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function spnodos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'spnodos_content_width', 640 );
}
add_action( 'after_setup_theme', 'spnodos_content_width', 0 );

 
add_post_type_support( 'page', 'excerpt' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function spnodos_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'spnodos' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'spnodos' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'spnodos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function spnodos_scripts() {
	wp_enqueue_style( 'spnodos-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'spnodos-style', 'rtl', 'replace' );

	wp_enqueue_script( 'spnodos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uikit', get_template_directory_uri() . '/js/uikit.min.js', array(), _S_VERSION);
	wp_enqueue_script( 'uikiticons', get_template_directory_uri() . '/js/uikit-icons.min.js', array(), _S_VERSION);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if( is_page( array('autoevaluacion' , 'test') ) ){
        wp_enqueue_script( 'jquery3', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'chartjs', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js', array(), _S_VERSION, true  );
		wp_enqueue_script( 'my_js', get_theme_file_uri( 'js/custom.js'), array(), _S_VERSION, true );

		wp_localize_script( 'my_js', 'ajax_var', array(
			'url'    => admin_url( 'admin-ajax.php' ),
			'nonce'  => wp_create_nonce( 'my-ajax-nonce' ),
			'action' => 'cursos-list'
		) );
	}
}
add_action( 'wp_enqueue_scripts', 'spnodos_scripts' );

function my_cursos_list_cb() {
    // Check for nonce security
    $nonce = sanitize_text_field( $_POST['nonce'] );

    if ( ! wp_verify_nonce( $nonce, 'my-ajax-nonce' ) ) {
        die ( 'Busted!');
	}
	// Obtenemos las categorías del POST
	$cats = $_POST['cats'];
	// Filtramos para dejar sólo las que tengan un valor inferior a 70
	$cats = array_filter($cats, function($valor_categoria){return $valor_categoria < 70;});
	
	// Ordenamos de menor a mayor por la key
	asort($cats);
	
	// Nos quedamos sólo con las categorías (dejamos de lado los valores)
	$cats = array_keys($cats);
	
	// Y las unimos separadas por coma
	$cats_string = join(",", $cats);
	
	echo '<h2 class="uk-margin-medium uk-text-bold">Recursos útiles de acuerdo a tus resultados</h2>';
	echo '<ul class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@m uk-text-small uk-margin-small" uk-grid uk-height-match="target: > li"  uk-margin>';
                
	$posts_existentes = [];
	foreach ($cats as $cat){
	    $args = array(
	        'post_type' => 'post',
	        'status' => 'publish',
	        'category_name' => $cats_string,
	    );
	    $query = new WP_Query( $args );
		
	    if ( $query->have_posts() ) {
			
	        while ($query->have_posts()) {
	            $query->the_post();
	            $post_id = get_the_ID();
	            if (!in_array($post_id, $posts_existentes)){
	                get_template_part('layouts/card');
	                array_push($posts_existentes, $post_id);
	            }
			}
	    }
	}

	echo '</ul>';

    wp_die();
}
add_action( 'wp_ajax_nopriv_cursos-list', 'my_cursos_list_cb' );
add_action( 'wp_ajax_cursos-list', 'my_cursos_list_cb' );


/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

