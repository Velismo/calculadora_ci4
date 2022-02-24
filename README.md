# Creación del proyecto Calculador para Grupo Blendio

## Instalación del framework

Visitamos la página web de [Codeigniter](http://codeigniter.com), para descargarnos la última versión del framework, Codeigniter 4.

La guía de usuario correspondiente a esta versión del framework se puede visitar [aquí](https://codeigniter4.github.io/userguide/).

Para su instalación, en mi caso, opto por hacerlo a traves de composer introduciendo la siguiente línea de códgio a traves del terminal e indicando la carpeta de destino del proyecto:

`composer create-project codeigniter4/appstarter calculadora_ci4`

De esta manera se crea la aplicación para calculadora_ci4 con todo lo necesario para que pueda funcionar sin tener que hacer nada más.

Para comprobar que se ha instalado correctamente iniciamos Xampp y vamos al enlace fijado que es [éste](http://localhost:8080/). Si todo funciona correctamente deberiamos ver la página de bienvenida de Codeigniter 4.

![Página de bienvenida de Codeigniter 4](https://codeigniter.com/user_guide/_images/welcome1.png)

## Creando nuestro primer controlador

Para crear nuestro primer controlador, generamos el archivo **Calculadora.php** en la siguiente ruta **app/Controllers/..** y escribimos el código que se puede ver [aquí](https://github.com/Velismo/calculadora_ci4/blob/master/app/Controllers/Calculadora.php).

Además, para poder añadir cualquier código adiccional a posteriori y que se cargue en todas las páginas que pueda tener nuestro poryecto, creamos dos plantillas: una para **Header** y otra para **Footer**. Será un código sencillo tanto para el [header](https://github.com/Velismo/calculadora_ci4/blob/master/app/Views/templates/header.php), como para el [footer](https://github.com/Velismo/calculadora_ci4/blob/master/app/Views/templates/footer.php), al que iremos añadiendo todo lo necesario conforme nuetra aplicación vaya creciendo (Hay que ser precavidos desde el principio :&#128517;:). Generamos el siguiente archivo para ambas vistas en la ruta **app/Views/templates/..**

También creamos la carpeta **pages** en la ruta **app/Views/pages**, para crear la que, por el momento, será nuestra uníca página. La llamamos **calculadora.php**.

Para poder llegar a ella le indicamos la ruta en **app/Config/Routes.php** y la incluimos debajo del área comentada como "*Route Definitions*".

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
