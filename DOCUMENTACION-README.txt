
Usuario administrador:
admin
Drupal9Barri0

Características

Drupal 9 con composer

modulos instalados con composer:

Módulos sacados de la documentación de Edutools

************
PARA INICIAR

composer drush/drush --with-all-dependencies
composer require drupal/admin_toolbar
composer require pathauto
composer require drupal/devel

*****************************************************************
PARAGRAPHS Y CARRUSEL

composer require drupal/paragraphs:^1.14
composer require drupal/slick
composer require drupal/blazy

*****************************************************************

PARA CAMPOS:

composer require drupal/ctools:^3.11
	composer require 'drupal/ctools:^3.11'

composer require drupal/field_group:^3.4
	composer require 'drupal/field_group:^3.4'

composer require drupal/chosen:^3.0
	composer require 'drupal/chosen:^3.0'


composer require drupal/block_field:^1.0@RC
	composer require 'drupal/block_field:^1.0@RC'


PARA ASPECTOS Y NAVEGACIÓN

composer require drupal/colorbutton:^1.4
	composer require 'drupal/colorbutton:^1.4'

***** Instalar librería 
		/libraries/colorbutton
http://ckeditor.com/addon/colorbutton

composer require drupal/panelbutton:^1.5
	composer require 'drupal/panelbutton:^1.5'

http://ckeditor.com/addon/panelbutton

***** Instalar librería 
	/libraries/panelbutton
	/libraries/panelbutton

versiones 4.5.6 mínimo

*********  arroja error  ***************
composer require drupal/rate:^3.0
	composer require 'drupal/rate:^3.0'
composer require drupal/rate:^2.0@beta
*********  arroja error  ***************


PARA DESARROLLO

composer require drupal/devel_entity_updates:^4.0
	composer require 'drupal/devel_entity_updates:^4.0'

composer require drupal/devel_kint_extras:^1.0
	composer require 'drupal/devel_kint_extras:^1.0'

composer require drupal/asset_injector:^2.12
	composer require 'drupal/asset_injector:^2.12'

composer require drupal/twig_tweak:^3.2
	composer require 'drupal/twig_tweak:^3.2'

composer require drupal/module_builder:^3.25
	composer require 'drupal/module_builder:^3.25'

****************** no se puede instalar con composer  ***************

composer require drupal/conditional_fields:^4.0@alpha
	composer require 'drupal/conditional_fields:^4.0@alpha'

**************************************************************************

TEMAS INSTALADOS:

composer require drupal/bootstrap_barrio

Subtema creado barrio_veracruz, subtema de barrio

*****************************************************************

Librerias JS:

blazy
slick
colorbutton (no la reconoció el módulo, a pesar de estar en la carpeta libraries)
panelbutton (no la reconoció el módulo, a pesar de estar en la carpeta libraries)

****************************************************************
Comando drush empleados

drush en {name}
drush updb
drush cr
drush pmu {name}
drush sql:dump --result-file=../{name}.sql

****************************************************************

Comandos git empleados:

Comandos git usados

git init
git add .
git commit -m "MSG"
git branch -M master

git remote add origin https://github.com...
git push -u origin master

git status
git add * .
git commit -am "MSG"



