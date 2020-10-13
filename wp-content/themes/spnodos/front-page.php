<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spnodos
 */

get_header();
?>

<!--Hero-->
<section id="hero" class="uk-background-primary uk-light">
    <div class="hero-inner uk-container uk-padding-large">
        <h1 class="hero-title uk-width-4-5@m uk-animation-slide-left">Modelo de gestión cooperativa</h1>
        <div class="hero-text uk-width-3-5@m">
            <p>Recorramos juntos el camino para ser más competitivos y sustentables</p>
        </div>


        <div class="go-down uk-visible@s uk-flex uk-flex-center uk-flex-middle uk-animation-toggle" tabindex="0">
            <a href="#home-step-1" class="uk-animation-fast uk-animation-slide-top" uk-scroll><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" uk-svg width="15"></a>
        </div>
    </div>

    <!--Hero Media-->
    <div id="hero-media" style="background-color: #f1f1f1;">
        <div class="media-wrapper uk-clearfix">
            <video src="<?php echo get_template_directory_uri(); ?>/assets/videos/muestra.mp4" loop muted playsinline uk-video="autoplay: inview" controls class="media"></video>
        </div>
    </div>
</section>

<!--STEP 1-->
<section id="home-step-1" class="uk-section uk-padding-large">
    <div class="uk-container uk-container-large">
        <div class="uk-grid-large uk-flex-middle uk-padding-small uk-padding-remove-bottom" uk-grid>
            <div class="uk-width-1-3@s" uk-scrollspy="cls: uk-animation-slide-left;; repeat:true;delay:200">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/forma-04-mano.png" class="uk-align-center" alt="Fundación Nodos" width="230">
            </div>
            <div class="uk-width-2-3@s uk-padding-large" uk-scrollspy="target: > .uk-text-light; cls: uk-animation-slide-bottom;">
                <h2 class="uk-text-bold uk-margin-medium">El modelo de gestión cooperativa nos ayuda a conocer:</h2>
                <ul class="custom-list uk-list uk-text-light">
                    <li><strong>Las mejores prácticas para avanzar hacia una gestión integral</strong>, ya que funciona como un marco de trabajo estándar compartido</li>
                    <li><strong>El grado de desarrollo de la cooperativa</strong>, identificando fortalezas, oportunidades de mejora y puntajes mediante la autoevaluación</li>
                    <li><strong>Cómo acelerar nuestra transformación</strong>, ayudando a diseñar una hoja de ruta de mejora concreta.</li>
                    <li><strong>Cómo ser reconocidos</strong>, ya que el sistema de evaluación permite obtener reconocimientos por niveles de gestión y resultados destacados. 
                    </li>
                </ul>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cruces-05.png" class="uk-align-right uk-visible@m" alt="Fundación Nodos" width="200">
            </div>
            
        </div>
    </div>
</section>

<!--STEP 2-->
<section id="home-step-2" class="uk-section uk-padding-large uk-padding-remove-top">
    <div class="uk-container uk-container-large">
        <div class="uk-grid-large uk-flex-top uk-padding-remove-bottom" uk-grid>
            <div class="uk-width-2-3@s" uk-scrollspy="target: > .uk-text-light; cls: uk-animation-slide-bottom;">
                <h2 class="uk-text-bold" style="padding-top:80px;">La cooperativa en 3 dimensiones</h2>
                <p class="uk-text-light">El modelo propone ordenar las buenas prácticas en tres grandes grupos. 
                    <ul class="custom-list uk-list uk-text-light">
                        <li><span class="resaltador azul">Liderazgo Cooperativo</span>, que establece cómo el Gobierno de la Cooperativa define el rumbo estratégico y las políticas a alto nivel.</li>
                        <li><span class="resaltador azul">Gestión Integral</span>, es decir, lo que se hace y cómo se hacen los distintos procesos.</li>
                        <li><span class="resaltador azul">Resultados de Cuádruple Impacto</span> que se obtienen de una planificación y ejecución efectivas.</li>
                    </ul>
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cruces-06.png" class="uk-align-right" alt="Fundación Nodos" width="150">
            </div>
            <div class="uk-width-1-3@s" uk-scrollspy="cls: uk-animation-slide-right; repeat:true;delay:500">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/forma-05-mano.png" alt="Fundación Nodos" width="230">
            </div>
        </div>
    </div>
</section>

<!--STEP 3-->
<section id="home-step-3" class="uk-section uk-padding-large uk-padding-remove-bottom">
    
    <div class="uk-container uk-container-large">
        
        <div class="uk-grid-large uk-flex-middle uk-padding-remove-bottom uk-grid" uk-grid>
            <div class="img-wrap uk-width-1-2@m">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dylan-gillis-KdeqA3aTnBY-unsplash.jpg">
            </div>
            <div class="uk-width-1-2@m">
                <div>
                    <div>
                        <div class="uk-margin-large" uk-scrollspy="target: > .uk-text-light; cls: uk-animation-slide-bottom;">
                            <h2 class="uk-text-bold">La autoevaluación online es una primera aproximación al modelo</h2>
                            <p class="uk-text-light">Completar la autoevaluación online te permitirá diagnosticar la madurez de tu cooperativa, identificar fortalezas y oportunidades de mejora. Además, en base a tus resultados te ofrecemos distintos recursos para mejorar el desempeño. </p>
                            <p class="uk-margin">
                                <a href="/autoevaluacion" class="cta uk-button uk-button-primary uk-button-large uk-border-pill uk-text-light">Comenzar Autoevaluación <span uk-icon="chevron-right"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="uk-text-center uk-grid-small uk-margin-large">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.png" width="350">
</div>

<section id="home-step-3-2" class="uk-section uk-padding-large uk-padding-remove-top">
    <div class="uk-container uk-container-large">
        <div class="uk-grid-large uk-flex-top uk-padding-remove-bottom" uk-grid>
            <div class="uk-width-2-3@m uk-width-1-1" uk-scrollspy="target: > .uk-text-light; cls: uk-animation-slide-bottom;">
                <h2 class="uk-text-bold">Más beneficios del modelo de gestión cooperativa</h2>
                <ul class="uk-text-light custom-list uk-list">
                    <li>Se parte de una comunidad de cooperativas que buscan ser más competitivas y sustentables</li>
                    <li>Compartí tus mejores prácticas y aprendé de los demás</li>
                    <li>Participá de una evaluación más profunda y específica, acompañados por el equipo de Fundación Nodos.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="uk-text-center uk-grid-small">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.png" width="350">
</div>

<!--STEP 4-->
<section id="home-step-4" class="uk-section uk-padding-large">
    <div class="uk-container uk-container-large">
        <div class="uk-grid-large uk-flex-top" uk-grid>
            <div class="uk-width-2-5@s" uk-scrollspy="cls: uk-animation-slide-left; repeat:true; delay:200;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/forma-06-mano.png" class="uk-align-center" alt="Fundación Nodos" width="240">
            </div>
            <div class="uk-width-3-5@s uk-text-light">
                <div uk-grid>
                    <div class="uk-width-4-5@m" uk-scrollspy="cls: uk-animation-slide-bottom;">
                        <h2 class="uk-margin-small uk-text-bold">El modelo de gestión es el resultado de un proceso colaborativo</h2>
                        <p class="uk-text-light">Fue co-diseñado en talleres participativos por un grupo de cooperativas, con la participación de funcionarios y consejeros de las entidades. De esta manera, surge de las miradas y experiencias de cooperativas en las que el ecosistema puede verse reflejado.</p>
                        <p>El modelo fue testeado en algunas cooperativas que participaron de una autoevaluación piloto, y a partir de los resultados que obtuvimos, generamos una nueva versión mejorada. </p>
                        <p></p>Hoy queremos llegar a todo el ecosistema, buscamos que más cooperativas usen el modelo y seamos cada vez más, los que formamos esta comunidad de mejora continua y conocimiento compartido.</p>
                    </div>
                    <div class="uk-width-1-5@m uk-visible@s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cruces-07.png" class="uk-align-left cruces uk-visible@m" alt="Fundación Nodos">
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
