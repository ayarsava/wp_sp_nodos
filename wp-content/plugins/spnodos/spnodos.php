<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.ayarsava.com.ar
 * @since             1.0.0
 * @package           Spnodos
 *
 * @wordpress-plugin
 * Plugin Name:       SP Nodos
 * Plugin URI:        http://www.ayarsava.com.ar
 * Description:       Plugin desarrollado para Fundación Nodos
 * Version:           1.0.0
 * Author:            Ayar Sava
 * Author URI:        http://www.ayarsava.com.ar
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       spnodos
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


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

/**
 * Register a custom post type called "pregunta".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_autoevaluacion_init() {
    $labels = array(
        'name'                  => _x( 'Preguntas', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Pregunta', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Autoevaluación', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Pregunta', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Agregar nueva', 'textdomain' ),
        'add_new_item'          => __( 'Agregar nueva pregunta', 'textdomain' ),
        'new_item'              => __( 'New Pregunta', 'textdomain' ),
        'edit_item'             => __( 'Editar pregunta', 'textdomain' ),
        'view_item'             => __( 'Ver pregunta', 'textdomain' ),
        'all_items'             => __( 'Todas las preguntas', 'textdomain' ),
        'search_items'          => __( 'Buscar preguntas', 'textdomain' ),
        'parent_item_colon'     => __( 'Preguntas padres:', 'textdomain' ),
        'not_found'             => __( 'Ho hemos encontrado preguntas.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No hemos encontrado preguntas en la papelera.', 'textdomain' ),
        'archives'              => _x( 'Archivo de preguntas', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into pregunta', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this pregunta', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter preguntas list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Preguntas list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Preguntas list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'pregunta' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author'),
		'taxonomies'         => array('category'),
    );
 
    register_post_type( 'pregunta', $args );
}
 
add_action( 'init', 'wpdocs_codex_autoevaluacion_init' );

/*** AUTOEVALUACION ***/
function wp_autoevaluacion() {
    
	$args = array(
		'post_type'             => 'pregunta',
        'posts_per_page'        => -1,
        'order'                 => 'ASC',
	);
  
	// The Query
	$query_autoevaluacion = new WP_Query( $args );
	
	if ( $query_autoevaluacion->have_posts() ) :
	  	echo '<div class="slick autoevaluacion slider-nav">';
	  	/* Start the Loop */
		$count = 1;
		$question_codigo = 0;
        $label_codigo = 100;

        //$categories = get_categories( $args );
        $categories = get_terms_by_post_type( array('category'), array('pregunta'));
        ?>
        <script>
        totalpreguntas = "<?php echo $query_autoevaluacion->post_count; ?>";
        var val = {};
        var min = [];
        var max = [];
        var names = {};
        var maximo = {};
        <?php

            foreach ( $categories as $category ) {
                echo "val['" . $category->slug . "'] = 0;";
            };
            foreach ( $categories as $category ) {
                echo "names['" . $category->slug ."'] = '". $category->name ."';";
            }; 
            foreach ( $categories as $category ) {
                echo "maximo['" . $category->slug ."'] = 100;";
            }; 
        
        
        $catList = '';
        foreach ( $categories as $category ) {
            if(!empty($catList)) {
                $catList .= ', ';
            }
            $catList .= '"'.strtoupper($category->name).'"';
        }
        ?>
        var labels= [<?php echo $catList; ?>];
        <?php
        $maxList = '';
        foreach ( $categories as $category ) {
            if(!empty($maxList)) {
                $maxList .= ',';
            }
            $maxList .= 100;
        }
        ?>
        var value_def= [<?php echo $maxList; ?>];
        
        </script>
        <?php
        while ( $query_autoevaluacion->have_posts() ) : $query_autoevaluacion->the_post();
            
            $categories = get_the_category();
            $cat_count = $categories[0];

            $posts = get_posts('post_type=pregunta&category='.$categories[0]->term_id.''); 
            $count = count($posts); 
           
            $post_per_category = $count;
            $valor1 = 25 / $post_per_category;
            $valor2 = 50 / $post_per_category;
            $valor3 = 75 / $post_per_category;
            $valor4 = 100 / $post_per_category;

            echo '<!--1. '.$categories[0]->name.'-->';
            echo '<div class="question pt-5" id="question'.++$question_codigo.'">';
                echo '<div class="row">';
                    echo '<div class="rubro uk-text-bold"><img class="icon" src="';
                    echo z_taxonomy_image_url($categories[0]->term_id);
                    echo '"><span class="azul">'.$categories[0]->name.'</span></div>';
                    echo '<div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">';
                    echo '<div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">';
                        echo '<div>'. get_the_content().'</div>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="uk-margin question__options">';
                    echo '<label for="'.++$label_codigo.'"><input class="uk-radio" type="radio" name="'.$categories[0]->slug.'__'.$question_codigo.'" value="'.$valor1.'" id="'.$label_codigo.'">  No lo cumplimos</label>';
                    echo '<label for="'.++$label_codigo.'"><input class="uk-radio" type="radio" name="'.$categories[0]->slug.'__'.$question_codigo.'" value="'.$valor2.'" id="'.$label_codigo.'">  Cumplimos parcialmente</label>';
                    echo '<label for="'.++$label_codigo.'"><input class="uk-radio" type="radio" name="'.$categories[0]->slug.'__'.$question_codigo.'" value="'.$valor3.'" id="'.$label_codigo.'">  Cumplimos mayoritariamente</label>';
                    echo '<label for="'.++$label_codigo.'"><input class="uk-radio" type="radio" name="'.$categories[0]->slug.'__'.$question_codigo.'" value="'.$valor4.'" id="'.$label_codigo.'">  Cumplimos totalmente</label>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
    
        endwhile;
        echo '</div>';
    endif;
    wp_reset_postdata();
}


$new_general_setting = new new_general_setting();
class new_general_setting {
    function new_general_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'featured_video', 'esc_attr' );
        add_settings_field('feat_video', '<label for="featured_video">'.__('Video principal en Home' , 'featured_video' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'featured_video', '' );
		echo '<input type="url" name="featured_video" id="featured_video" class="regular-text" value="' . $value . '">';
    }
}