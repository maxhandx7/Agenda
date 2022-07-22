 PHP


¿Qué es PHP?
PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de programación de código abierto muy popular especialmente adecuado para el desarrollo web y una de sus gracias es que puede ser incrustado en HTML. Actualmente puedes probar la versión 7.

PHP y HTML
Una de las ventajas de PHP es que puedes mezclar tus códigos HTML y PHP sin ningún problema, solo tienes que utilizar las etiquetas de apertura <?php y cierre ?> correctamente.

PHP en el servidor
PHP es ejecutado en el servidor, generando HTML y enviándolo al cliente. El cliente recibirá el resultado de ejecutar el script, aunque no se sabrá el código subyacente que era. Por lo tanto el cliente no tendrá acceso al código PHP.

Instalación
Para realizar proyectos de forma local (sin necesidad de un hosting), podemos instalar un servidor que ejecutará todas las configuraciones por nosotros (Apache + MariaDB + PHP). Uno de los mejores programas y el que yo recomiendo es XAMPP, puedes descargarlo aquí.

htdocs
Una vez instalado XAMPP tienes que viajar al directorio donde alojaste el programa, adentro encontrarás la carpeta htdocs. Esta carpeta es muy importante porque es aquí donde nosotros guardaremos cada uno de nuestros proyectos.

Hola mundo!
Cómo es un clásico, realizaremos nuestro primer hola mundo con PHP. Para esto crearemos dentro del directorio htdocs una carpeta llamada fundamentos y dentro crea un archivo con el siguiente código, la extensión de este archivo tiene que ser nombreArchivo.php

<?php
  echo 'Hola mundo con php';
?>
