<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# API para el backend de la app de películas

Esta API ha sido creada como parte de una prueba técnica para la empresa [SOMOS experiences]. Se trata de una API para el CRUD de la app de películas.

## Instrucciones

Para utilizar esta API, debes tener instalados los siguientes requisitos:

- Composer
- PHP 8.1 o superior
- npm

Una vez que tengas instalados estos requisitos, sigue estos pasos:

1. Clona el repositorio de GitHub.
2. Instala las dependencias: `composer install`.
3. Configura la conexión a la base de datos en el archivo `.env`.
4. Corre las migraciones: `php artisan migrate`.
5. Crea un usuario administrador directamente en la base de datos.
6. Levanta el servidor: `php artisan serve`.

## Endpoints

- `POST /login`: Inicia sesión.
- `GET /movies`: Obtiene las películas de la base de datos.
- `POST /logout`: Cierra sesión.
- `POST /movie/create`: Crea una película.
- `POST /movie/update/{id}`: Actualiza una película.
- `GET /movie/{id}`: Obtiene una película de la base de datos.
- `GET /user`: Obtiene el usuario de la base de datos.
- `DELETE /movie/{id}`: Elimina una película de la base de datos.

## Contacto

Para cualquier duda o sugerencia, puedes contactarme a través de los siguientes medios:

- Nombre: Fabian Armando Espinosa Hernández.
- Teléfono: +34600390584.
- Email: fabianespinosa1988@gmail.com.
- GitHub: https://github.com/FabianEspinosa.
- LinkedIn: https://www.linkedin.com/in/faehz/.
