
# Prueba Protec

Ejercicio de desarrollo fullstack. Blog que muestre un listado de las entradas existentes y permita la búsqueda mediante campos de título, autor y contenido. También será posible agregar entradas desde un formulario.


## Tecnologías empleadas

Entorno de desarrollo sobre Windows 10

Las herramientas utilizadas fueron XAMPP 7.4.30, que contiene los componente PHP 7.4.30, base de datos MySQL/MariaDB 10.4.25 y servidor Apache 2.4.54.

Framework de desarrollo: Laravel 8.83.27

Las herramientas de frontend empleadas fueron Bootstrap 5.3.3, Font Awesome 6.5.1.

Librerías y plugins de Javascript: jQuery 3.7.1, CKEditor versión 5, DataTables 2.0.0


## Demo

El ejemplo se puede ver en línea en la URL http://18.119.248.117/

Igualmente, el código y estructura de la base de datos están disponibles en el repositorio de Github https://github.com/raulmedinacampos/prueba-protec.git
## Instalación

Para que pueda ser utilizado en un entorno local es necesario hacerlo bajo un servidor Apache y crear un vhost llamado protect.test. En caso de usar otro nombre asociado se deberá hacer en el archivo [root]/.env ajustando los valores APP_URL y ASSET_URL a los valores deseados. En el mismo archivo es necesario ajustar los valores de conexión de la base de datos a los establecidos en el servidor local. Estas propiedades son: DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD.
## Capturas de pantalla

![App Screenshot](https://gtc-testing.com/rmedina/img1.png)
![App Screenshot](https://gtc-testing.com/rmedina/img2.png)
![App Screenshot](https://gtc-testing.com/rmedina/img3.png)

