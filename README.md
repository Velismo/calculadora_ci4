# Creación del proyecto Calculadora para Grupo Blendio

## Instalación del framework

Visitamos la página web de [Codeigniter](http://codeigniter.com), para descargarnos la última versión del framework, Codeigniter 4.

La guía de usuario correspondiente a esta versión del framework se puede visitar [aquí](https://codeigniter4.github.io/userguide/).

Para su instalación, en mi caso, opto por hacerlo a traves de composer introduciendo la siguiente línea de códgio a traves del terminal e indicando la carpeta de destino del proyecto:

`composer create-project codeigniter4/appstarter calculadora_ci4`

De esta manera se crea la aplicación para calculadora_ci4 con todo lo necesario para que pueda funcionar sin tener que hacer nada más.

Para comprobar que se ha instalado correctamente iniciamos Xampp y vamos al enlace fijado que es [éste](http://localhost:8080/). Si todo funciona correctamente deberiamos ver la página de bienvenida de Codeigniter 4.

![Página de bienvenida de Codeigniter 4](https://codeigniter.com/user_guide/_images/welcome1.png)

## Creando nuestro primer controlador

Para crear nuestro primer controlador, generamos el archivo **Calculadora.php** en la siguiente ruta **app/Controllers/..** y escribimos el código que se puede ver [aquí](app/Controllers/Calculadora.php).

Además, para poder añadir cualquier código adiccional a posteriori y que se cargue en todas las páginas que pueda tener nuestro poryecto, creamos dos plantillas: una para **Header** y otra para **Footer**. Será un código sencillo tanto para el [header](app/Views/templates/header.php), como para el [footer](app/Views/templates/footer.php), al que iremos añadiendo todo lo necesario conforme nuetra aplicación vaya creciendo (Hay que ser precavidos desde el principio &#128517;). Generamos el siguiente archivo para ambas vistas en la ruta **app/Views/templates/..**

También creamos la carpeta **pages** en la ruta **app/Views/pages**, para crear la que, por el momento, será nuestra uníca página. La llamamos **calculadora.php**.

Para poder llegar a ella le indicamos la ruta en **app/Config/Routes.php** y la incluimos debajo del área comentada como "*Route Definitions*".

Para terminar añadimos la función cálculo, para poder realizar las operaciones matemáticas necesarias.

## Creando nuestro primer modelo

Para crear nuestro primer modelo, generamos el archivo **Modelo_Calculadora.php** en la siguiente ruta **app/Models/..** y escribimos el código que se puede ver [aquí](app/Models/Modelo_Calculadora.php)

Dentro del modelo creamos la función cálculo que incluye tres parametros: digito1, digito2 y operador. Para poder alternar entre los diferentes tipos de operadores utilizamos la declaración switch. Esto nos devolvera el operador que eligamos en nuestra vista.

## Creando la vista de la calculadora

Para crear la vista de nuestra calculadora, como ya idicamos en la sección del controlador, generamos el archivo **calculadora.php** en la siguiente ruta **app/Views/pages/..** y escribimos el código que se puede ver [aquí](app/Views/pages/calculadora.php)

Al intentar generar el resultado en la misma vista, estoy teniendo problemas y no se muy bien por qué no se está mostrando. Seguiremos intentándolo.

## Incidencias
Estas son algunas de las incidencias que me he encontrado durante la realización del proyecto:
- Al crear la vista de la calculadora, no consigo que el resultado, con valor $resultado se muestre en pantalla. He intentado diferentes métodos, pero creo que la mejor solución pasa por no usar un formulario y utilizar cualquier otra forma de obtener el resultado deseado.