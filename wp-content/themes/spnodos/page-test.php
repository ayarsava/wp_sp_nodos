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

	<main id="primary" class="site-main autoevaluacion">

		<!--Hero-->
        <section id="hero" class="uk-section uk-background-primary uk-light uk-padding-remove-bottom">
            <div class="hero-inner uk-container">
                <?php the_title( '<h1 class="hero-title uk-width-2-3@m uk-animation-slide-left">', '</h1>' ); ?>
                <?php if ( has_excerpt() ) : ?>
                <div class="intro hero-text uk-width-2-3@m">
                    <p><?php the_excerpt();?></p>
                </div>
                <?php endif; ?>
                <div class="intro hero-text uk-width-2-3@m">
                    <a class="uk-margin uk-button uk-button-default uk-button-large uk-border-pill uk-text-light start">COMENZAR</a>
                </div>
                <div class="go-down uk-visible@s uk-flex uk-flex-center uk-flex-middle uk-animation-toggle" tabindex="0">
                <a href="#content" class="uk-animation-fast uk-animation-slide-top" uk-scroll><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" uk-svg width="15"></a>
                </div>
            </div>
        </section>              

        <!--PAGE-->
        <!--CUESTIONARIO-->
        <section id="test" class="uk-container uk-container-small uk-text-light survey">
            <div class="uk-section uk-container uk-container-large uk-padding-large" id="cuestionario">
                <!--Progreso-->
                <div class="uk-text-right porcentaje"><span>0</span>%</div>
                <progress id="js-progressbar" class="uk-progress" value="0" max="100"></progress>
                <div id="progress">
                    <p class="text-center small text-gray progress-number"><span class="actual"></span> de <span class="maximo"></span></p>
                </div>

                <!--Preguntas-->
                <form method='POST' action='' id='questions'>
                    <?php wp_autoevaluacion();?>
                    <input type='hidden' name='resultado[]' id="resultado" value=''>
                </form>

                <!--Resultados-->
                <div id="ver-resultado" class="uk-margin">
                    <div class="bg-light">
                        <div class="uk-container">
                            <div class="row uk-margin">
                                <h2>Resultado</h2>
                            </div>
                            <div class="uk-margin">
                                <div id="result" class="chart-container" style="position: relative; width:100%">
                                    <canvas id="chart"></canvas>
                                </div>
                            </div>
                            <hr class="uk-divider-icon">
                            <div class="h3 result-text uk-margin-medium-top">
                                Tu cooperativa se destaca en <span class="max uk-text-primary uk-text-bold"></span>.
                            </div>
                            <div class="h3 result-text uk-margin-medium-top">
                                Los ejes en los que podrían fortalecerse para lograr un mejor desempeño son <span class="min uk-text-primary uk-text-bold"></span>.
                            </div>
                            <div class="uk-card uk-card-default uk-card-body uk-margin-medium-top">
                                <p>Para acceder a una evaluación más completa y participar del Modelo de Gestión Cooperativa <a href="/contacto" class="cta uk-text-bold" style="text-decoration: underline">completá el formulario</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos-sugeridos" class="uk-section page uk-margin-large-bottom">
            <div class="uk-container-expand"></div>
        </section>
	</main><!-- #main -->

<?php
get_footer();
