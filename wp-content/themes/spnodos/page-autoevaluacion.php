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
                    <a class="uk-margin uk-button uk-button-default uk-button-large uk-border-pill uk-text-light start">COMENZAR</a>
                </div>
                <?php endif; ?>
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
                <form method='POST' action='result.html' id='questions'>

                    <!--1. Gobierno cooperativo (GC)-->
                    <div class="question pt-5" id="question1">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-01-gobierno.png"><span class="azul">Gobierno cooperativo (GC)</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                            <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Los miembros del GC y sus responsabilidades están definidas en un <strong>Reglamento Interno</strong> complementario al Estatuto</div>
                            </div>
                            </div>
                            <div class="uk-margin question__options">
                            <label for="101"><input class="uk-radio" type="radio" name="gobierno-cooperativo__1" value="8.33333" id="101">  No lo cumplimos</label>
                            <label for="102"><input class="uk-radio" type="radio" name="gobierno-cooperativo__1" value="16.666666666666667" id="102">  Cumplimos parcialmente</label>
                            <label for="103"><input class="uk-radio" type="radio" name="gobierno-cooperativo__1" value="25" id="103">  Cumplimos mayoritariamente</label>
                            <label for="104"><input class="uk-radio" type="radio" name="gobierno-cooperativo__1" value="33.3333" id="104">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question2">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-01-gobierno.png"><span class="azul">Gobierno cooperativo (GC)</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                    <div>Cada miembro del GC cuenta con una <strong>Inducción Formal y Capacitación</strong> acorde a rol</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="111"><input class="uk-radio" type="radio" name="gobierno-cooperativo__2" value="8.33333" id="111">  No lo cumplimos</label>
                                <label for="112"><input class="uk-radio" type="radio" name="gobierno-cooperativo__2" value="16.666666666666667" id="112">  Cumplimos parcialmente</label>
                                <label for="113"><input class="uk-radio" type="radio" name="gobierno-cooperativo__2" value="25" id="113">  Cumplimos mayoritariamente</label>
                                <label for="114"><input class="uk-radio" type="radio" name="gobierno-cooperativo__2" value="33.3333" id="114">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question3">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-01-gobierno.png"><span class="azul">Gobierno cooperativo (GC)</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Las autoridades del GC establecen un <strong>Código de Ética</strong> que obliga a exponer conflictos de interés, a presentar denuncias y ponderar faltas</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="121"><input class="uk-radio" type="radio" name="gobierno-cooperativo__3" value="8.33333" id="121">  No lo cumplimos</label>
                                <label for="122"><input class="uk-radio" type="radio" name="gobierno-cooperativo__3" value="16.666666666666667" id="122">  Cumplimos parcialmente</label>
                                <label for="123"><input class="uk-radio" type="radio" name="gobierno-cooperativo__3" value="25" id="123">  Cumplimos mayoritariamente</label>
                                <label for="124"><input class="uk-radio" type="radio" name="gobierno-cooperativo__3" value="33.3333" id="124">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <!--2. Ecosistema cooperativo-->
                    <div class="question pt-5" id="question4">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-02-ecosistema.png"><span class="azul">Ecosistema cooperativo</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Se realizan proyectos compartidos con otras Cooperativas (comerciales, de inversión, educativos, sociales)</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="201"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__1" value="8.333" id="201">  No lo cumplimos</label>
                                <label for="202"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__1" value="16.666" id="202">  Cumplimos parcialmente</label>
                                <label for="203"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__1" value="33.3333" id="203">  Cumplimos mayoritariamente</label>
                                <label for="204"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__1" value="34" id="204">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question5">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-02-ecosistema.png"><span class="azul">Ecosistema cooperativo</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Desarrolla y fomenta la <strong>interacción con las Entidades del Grupo</strong>, participando de Reuniones/Seminarios y Asambleas </div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="211"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__2" value="8.333" id="211">  No lo cumplimos</label>
                                <label for="212"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__2" value="16.666" id="212">  Cumplimos parcialmente</label>
                                <label for="213"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__2" value="33.3333" id="213">  Cumplimos mayoritariamente</label>
                                <label for="214"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__2" value="33" id="214">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question6">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-02-ecosistema.png"><span class="azul">Ecosistema cooperativo</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>El GC <strong>designa representantes entre sus consejeros y funcionarios para actuar en otros ámbitos</strong>, los cuales son seleccionados y formados según perfiles especificos</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="221"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__3" value="8.3333" id="221">  No lo cumplimos</label>
                                <label for="222"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__3" value="16.666" id="222">  Cumplimos parcialmente</label>
                                <label for="223"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__3" value="33.3333" id="223">  Cumplimos mayoritariamente</label>
                                <label for="224"><input class="uk-radio" type="radio" name="ecosistema-cooperativo__3" value="33" id="224">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <!--3. Estrategia e innovación-->
                    <div class="question pt-5" id="question7">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-03-strategia-e-innovacion.png"><span class="azul">Estrategia e innovación</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Establece <strong>Objetivos Estratégicos</strong> para el mediano y largo plazo, considerando a los distintos grupos de interés</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="301"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__1" value="8.33333" id="301">  No lo cumplimos</label>
                                <label for="302"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__1" value="16.666666666666667" id="302">  Cumplimos parcialmente</label>
                                <label for="303"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__1" value="25" id="303">  Cumplimos mayoritariamente</label>
                                <label for="304"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__1" value="33.3333" id="304">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question8">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-03-strategia-e-innovacion.png"><span class="azul">Estrategia e innovación</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>El <strong>Plan Estratégico de la Cooperativa</strong> es comunicado y conocido por toda la organización</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="311"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__2" value="8.33333" id="311">  No lo cumplimos</label>
                                <label for="312"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__2" value="16.666666666666667" id="312">  Cumplimos parcialmente</label>
                                <label for="313"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__2" value="25" id="313">  Cumplimos mayoritariamente</label>
                                <label for="314"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__2" value="33.3333" id="314">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question9">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-03-strategia-e-innovacion.png"><span class="azul">Estrategia e innovación</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Gestiona estratégicamente las <strong>oportunidades/proyectos de innovación</strong>, evalúa riesgos e impactos y promueve la experimentación</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="321"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__3" value="8.33333" id="321">  No lo cumplimos</label>
                                <label for="322"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__3" value="16.666666666666667" id="322">  Cumplimos parcialmente</label>
                                <label for="323"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__3" value="25" id="323">  Cumplimos mayoritariamente</label>
                                <label for="324"><input class="uk-radio" type="radio" name="estrategia-e-innovacion__3" value="33.3333" id="324">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <!--4. Gestión del productor comercial-->
                    <div class="question pt-5" id="question10">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-06-gestion-economica.png"><span class="azul">Gestión del productor/comercial</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Analiza y desarrolla <strong>nuevas zonas, productos y servicios</strong></div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="401"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__1" value="4.1666" id="401">  No lo cumplimos</label>
                                <label for="402"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__1" value="8.333" id="402">  Cumplimos parcialmente</label>
                                <label for="403"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__1" value="16.666666666666667" id="403">  Cumplimos mayoritariamente</label>
                                <label for="404"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__1" value="16.666" id="404">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question11">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-06-gestion-economica.png"><span class="azul">Gestión del productor/comercial</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>11. Tiene una mesa de negocios con participación de todas las secciones, para <strong>potenciar la función comercial</strong> de la Cooperativa</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="411"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__2" value="4.1666" id="411">  No lo cumplimos</label>
                                <label for="412"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__2" value="8.333" id="412">  Cumplimos parcialmente</label>
                                <label for="413"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__2" value="16.666666666666667" id="413">  Cumplimos mayoritariamente</label>
                                <label for="414"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__2" value="16.666" id="414">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question12">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-06-gestion-economica.png"><span class="azul">Gestión del productor/comercial</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>La Satisfacción y Consecuencia de Asociados y Clientes se mide, tiene objetivos y mejoró en los últimos 3 años</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="421"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__3" value="4.1666" id="421">  No lo cumplimos</label>
                                <label for="422"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__3" value="8.333" id="422">  Cumplimos parcialmente</label>
                                <label for="423"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__3" value="16.666666666666667" id="423">  Cumplimos mayoritariamente</label>
                                <label for="424"><input class="uk-radio" type="radio" name="gestion-del-productor-comercial__3" value="16.666" id="424">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <!--5. Recursos humanos-->
                    <div class="question pt-5" id="question13">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-05-recursos-humanos.png"><span class="azul">Recursos Humanos</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Las incorporaciones se realizan de acuerdo a un <strong>proceso de selección definido</strong>,  según las descripciones y perfiles establecidos.</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="501"><input class="uk-radio" type="radio" name="recursos-humanos__1" value="8.33333" id="501">  No lo cumplimos</label>
                                <label for="502"><input class="uk-radio" type="radio" name="recursos-humanos__1" value="16.666666666666667" id="502">  Cumplimos parcialmente</label>
                                <label for="503"><input class="uk-radio" type="radio" name="recursos-humanos__1" value="25" id="503">  Cumplimos mayoritariamente</label>
                                <label for="504"><input class="uk-radio" type="radio" name="recursos-humanos__1" value="33.3333" id="504">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question14">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-05-recursos-humanos.png"><span class="azul">Recursos Humanos</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div><strong>Capacita a sus colaboradores</strong> de acuerdo a un plan que es monitoreado periódicamente </div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="511"><input class="uk-radio" type="radio" name="recursos-humanos__2" value="8.33333" id="511">  No lo cumplimos</label>
                                <label for="512"><input class="uk-radio" type="radio" name="recursos-humanos__2" value="16.666666666666667" id="512">  Cumplimos parcialmente</label>
                                <label for="513"><input class="uk-radio" type="radio" name="recursos-humanos__2" value="25" id="513">  Cumplimos mayoritariamente</label>
                                <label for="514"><input class="uk-radio" type="radio" name="recursos-humanos__2" value="33.3333" id="514">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question15">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-05-recursos-humanos.png"><span class="azul">Recursos Humanos</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>La <strong>satisfacción de colaboradores</strong> se mide, tienen objetivos definidos y presentan una tendencia de mejora en los últimos 3 años</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="521"><input class="uk-radio" type="radio" name="recursos-humanos__3" value="8.33333" id="521">  No lo cumplimos</label>
                                <label for="522"><input class="uk-radio" type="radio" name="recursos-humanos__3" value="16.666666666666667" id="522">  Cumplimos parcialmente</label>
                                <label for="523"><input class="uk-radio" type="radio" name="recursos-humanos__3" value="25" id="523">  Cumplimos mayoritariamente</label>
                                <label for="524"><input class="uk-radio" type="radio" name="recursos-humanos__3" value="33.3333" id="524">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <!--6. Gestión económica-financiera-->
                    <div class="question pt-5" id="question16">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-04-gestion-comercial.png"><span class="azul">Gestión económica-financiera</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Cuenta con un <strong>Presupuesto de ingresos y gastos</strong> con instancias de revisión y ajustes periódicos</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="601"><input class="uk-radio" type="radio" name="gestion-economica-financiera__1" value="8.33333" id="601">  No lo cumplimos</label>
                                <label for="602"><input class="uk-radio" type="radio" name="gestion-economica-financiera__1" value="16.666666666666667" id="602">  Cumplimos parcialmente</label> 
                                <label for="603"><input class="uk-radio" type="radio" name="gestion-economica-financiera__1" value="25" id="603">  Cumplimos mayoritariamente</label>
                                <label for="604"><input class="uk-radio" type="radio" name="gestion-economica-financiera__1" value="33.3333" id="604">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question17">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-04-gestion-comercial.png"><span class="azul">Gestión económica-financiera</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Posee un sistema para el <strong>seguimiento de la posición financiera integral</strong> de la cooperativa (posición de cereales / posición financiera / posición stock / posición USD)</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="611"><input class="uk-radio" type="radio" name="gestion-economica-financiera__2" value="8.33333" id="611">  No lo cumplimos</label>
                                <label for="612"><input class="uk-radio" type="radio" name="gestion-economica-financiera__2" value="16.666666666666667" id="612">  Cumplimos parcialmente</label>
                                <label for="613"><input class="uk-radio" type="radio" name="gestion-economica-financiera__2" value="25" id="613">  Cumplimos mayoritariamente</label>
                                <label for="614"><input class="uk-radio" type="radio" name="gestion-economica-financiera__2" value="33.3333" id="614">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question18">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-04-gestion-comercial.png"><span class="azul">Gestión económica-financiera</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>La evolución de los diferentes indicadores tanto economicos como financieros, se mide, tienen objetivos definidos y presentan una tendencia de mejora en los últimos 3 años</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="621"><input class="uk-radio" type="radio" name="gestion-economica-financiera__3" value="8.33333" id="621">  No lo cumplimos</label>
                                <label for="622"><input class="uk-radio" type="radio" name="gestion-economica-financiera__3" value="16.666666666666667" id="622">  Cumplimos parcialmente</label>
                                <label for="623"><input class="uk-radio" type="radio" name="gestion-economica-financiera__3" value="25" id="623">  Cumplimos mayoritariamente</label>
                                <label for="624"><input class="uk-radio" type="radio" name="gestion-economica-financiera__3" value="33.3333" id="624">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <!--7. Mejora de procesos -->
                    <div class="question pt-5" id="question19">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-07-mejor-de-procesos.png"><span class="azul">Mejora de procesos</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Los <strong>procesos clave están documentados</strong> y las responsabilidades conocidas por los involucrados</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="701"><input class="uk-radio" type="radio" name="mejora-de-procesos__1" value="8.33333" id="701">  No lo cumplimos</label>
                                <label for="702"><input class="uk-radio" type="radio" name="mejora-de-procesos__1" value="16.666666666666667" id="702">  Cumplimos parcialmente</label>
                                <label for="703"><input class="uk-radio" type="radio" name="mejora-de-procesos__1" value="25" id="703">  Cumplimos mayoritariamente</label>
                                <label for="704"><input class="uk-radio" type="radio" name="mejora-de-procesos__1" value="33.3333" id="704">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question20">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-07-mejor-de-procesos.png"><span class="azul">Mejora de procesos</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Se favorece la <strong>mejora continua de los procesos</strong>, mediante equipos de mejora, introducción de nuevas tecnologías y auditorías internas</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="711"><input class="uk-radio" type="radio" name="mejora-de-procesos__2" value="8.33333" id="711">  No lo cumplimos</label>
                                <label for="712"><input class="uk-radio" type="radio" name="mejora-de-procesos__2" value="16.666666666666667" id="712">  Cumplimos parcialmente</label>
                                <label for="713"><input class="uk-radio" type="radio" name="mejora-de-procesos__2" value="25" id="713">  Cumplimos mayoritariamente</label>
                                <label for="714"><input class="uk-radio" type="radio" name="mejora-de-procesos__2" value="33.3333" id="714">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question21">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-07-mejor-de-procesos.png"><span class="azul">Mejora de procesos</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Se miden indicadores de <strong>calidad y la productividad</strong>, tienen objetivos definidos y mejoraron en los últimos 3 años</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="721"><input class="uk-radio" type="radio" name="mejora-de-procesos__3" value="8.33333" id="721">  No lo cumplimos</label>
                                <label for="722"><input class="uk-radio" type="radio" name="mejora-de-procesos__3" value="16.666666666666667" id="722">  Cumplimos parcialmente</label>
                                <label for="723"><input class="uk-radio" type="radio" name="mejora-de-procesos__3" value="25" id="723">  Cumplimos mayoritariamente</label>
                                <label for="724"><input class="uk-radio" type="radio" name="mejora-de-procesos__3" value="33.3333" id="724">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>
            
                    <!--8. Gestón ambiental -->
                    <div class="question pt-5" id="question22">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-08-gestion-ambiental.png"><span class="azul">Gestión ambiental</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div><strong>Identifica, trata y controla los impactos ambientales</strong> asociados con esos aspectos significativos desde el proyecto hasta la disposición final. </div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="801"><input class="uk-radio" type="radio" name="gestion-ambiental__1" value="8.33333" id="801">  No lo cumplimos</label>
                                <label for="802"><input class="uk-radio" type="radio" name="gestion-ambiental__1" value="16.666666666666667" id="802">  Cumplimos parcialmente</label>
                                <label for="803"><input class="uk-radio" type="radio" name="gestion-ambiental__1" value="25" id="803">  Cumplimos mayoritariamente</label>
                                <label for="804"><input class="uk-radio" type="radio" name="gestion-ambiental__1" value="33.3333" id="804">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question23">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-08-gestion-ambiental.png"><span class="azul">Gestión ambiental</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div><strong>Concientiza, capacita e involucra</strong> en la gestión ambiental a sus integrantes, clientes, productores y comunidad</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="811"><input class="uk-radio" type="radio" name="gestion-ambiental__2" value="8.33333" id="811">  No lo cumplimos</label>
                                <label for="812"><input class="uk-radio" type="radio" name="gestion-ambiental__2" value="16.666666666666667" id="812">  Cumplimos parcialmente</label>
                                <label for="813"><input class="uk-radio" type="radio" name="gestion-ambiental__2" value="25" id="813">  Cumplimos mayoritariamente</label>
                                <label for="814"><input class="uk-radio" type="radio" name="gestion-ambiental__2" value="33.3333" id="814">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question24">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-08-gestion-ambiental.png"><span class="azul">Gestión ambiental</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Lleva adelante <strong>programas de reciclaje de insumos</strong> y eficiencia en el uso de recursos naturales/energéticos como bidones, papel, electricidad, plásticos y otros</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="821"><input class="uk-radio" type="radio" name="gestion-ambiental__3" value="8.33333" id="821">  No lo cumplimos</label>
                                <label for="822"><input class="uk-radio" type="radio" name="gestion-ambiental__3" value="16.666666666666667" id="822">  Cumplimos parcialmente</label>
                                <label for="823"><input class="uk-radio" type="radio" name="gestion-ambiental__3" value="25" id="823">  Cumplimos mayoritariamente</label>
                                <label for="824"><input class="uk-radio" type="radio" name="gestion-ambiental__3" value="33.3333" id="824">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <!--9. Desarrollo de comunidades -->
                    <div class="question pt-5" id="question25">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-09-comunidades.png"><span class="azul">Desarrollo de comunidades</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>La <strong>responsabilidad social es parte del plan estratégico</strong>, es respaldada por el Gobierno Cooperativo y cuenta con un presupuesto asignado</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="901"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__1" value="8.33333" id="901">  No lo cumplimos</label>
                                <label for="902"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__1" value="16.666666666666667" id="902">  Cumplimos parcialmente</label>
                                <label for="903"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__1" value="25" id="903">  Cumplimos mayoritariamente</label>
                                <label for="904"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__1" value="33.3333" id="904">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question26">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-09-comunidades.png"><span class="azul">Desarrollo de comunidades</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Realiza <strong>Balances Sociales</strong> reportando lo actuado y su impacto, siguiendo estándares y lineamientos internacionales </div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="911"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__2" value="8.33333" id="911">  No lo cumplimos</label>
                                <label for="912"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__2" value="16.666666666666667" id="912">  Cumplimos parcialmente</label>
                                <label for="913"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__2" value="25" id="913">  Cumplimos mayoritariamente</label>
                                <label for="914"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__2" value="33.3333" id="914">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>

                    <div class="question pt-5" id="question27">
                        <div class="row">
                            <div class="rubro uk-text-bold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-09-comunidades.png"><span class="azul">Desarrollo de comunidades</span></div>
                            <div class="uk-margin question__phrase uk-card uk-card-default uk-padding-small">
                                <div class="h4 uk-width-4-5@s uk-flex uk-flex-middle">
                                <div>Los niveles de Participación del <strong>Grupo de Juventudes</strong> se miden, tienen objetivos definidos y mejoraron en los últimos 3 años</div>
                                </div>
                            </div>
                            <div class="uk-margin question__options">
                                <label for="921"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__3" value="8.33333" id="921">  No lo cumplimos</label>
                                <label for="922"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__3" value="16.666666666666667" id="922">  Cumplimos parcialmente</label>
                                <label for="923"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__3" value="25" id="923">  Cumplimos mayoritariamente</label>
                                <label for="924"><input class="uk-radio" type="radio" name="desarrollo-de-comunidades__3" value="33.3333" id="924">  Cumplimos totalmente</label>
                            </div>
                        </div>
                    </div>
                            
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
        <section id="cursos-sugeridos" class="uk-section page">
            <div class="uk-container-expand"></div>
        </section>
	</main><!-- #main -->

<?php
get_footer();
