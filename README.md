# wp_sp_nodos

Crear entorno local
---------------

* Crear directorio de trabajo y acceder a el
* `git clone https://github.com/ayarsava/wp_sp_nodos.git`
* Correr `docker-compose up` en el terminal y acceder a http://localhost:8002

El puerto a acceder se encuentra seteado en la linea 20 de docker-compose.yml, el mismo puede ser configurado de acuerdo a sus necesidades.


Crear entorno en producción
---------------

* Acceder a directorio publico
* `wget http://wordpress.org/latest.tar.gz`
* `$tar xfz latest.tar.gz`
* `mv wordpress/* ./`
* `rmdir ./wordpress/`
* `rm -f latest.tar.gz`
* Instalar wordpress
* `git clone https://github.com/ayarsava/wp_sp_nodos.git`


Setup general
---------------

* Activar plugin `SP Nodos` incluido en el repositorio
* Instalar plugin `Categories Images` incluido en librería de plugins publica de WP
* Activar theme `spnodos` incluido en el repositorio


Contenido
---------------

### Modo simple (importador)

Usted podrá realizar una importación del perfil inicial del proyecto, lo cual creará las categorias, articulos, items de menú, etc. Este es un modo práctico de inicializar el proyecto, aunque requerirá de eliminar aquellos items de prueba de funcionamiento que se generen automáticamente. Las preguntas fueron creadas de acuerdo a lo solicitado.

### Modo manual

* Setear enlace permanente en modo Nombre entrada desde `/wp-admin/options-permalink.php`
* Crear las categoriás correspondientes en `Preguntas > Categorias` y cargar un icono para cada una. Los mismos se encuentran en `assets/img/icon-*`
* Crear las preguntas de la autoevaluación. Las preguntas se presentarán en el orden que fueron creadas. Si asi lo desean se podrá modificar el orden instalando el plugin público `Simple Custom Post Order` y una vez asignado el tipo de contenido `Preguntas` en el seteo del plugin, podrá arrastrar una pregunta sobre la otra modificando el orden
* Crear recursos desde la sección `Entradas` y asociarle las categorias correspondientes previamente creadas


Edición de contenido
---------------

* Wordpress ofrece el editor de contenido Gutemberg, lo cual provee todas las herramientas necesarias para presentar contenido interactivo.
* Podrá encontrar información complementaria para la creación de contenido en bloques en:
- https://wordpress.com/support/wordpress-editor/blocks/group-block/ 

