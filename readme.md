## Pasos para instalar el Proyecto
1. Descargar el repositorio
2. Por consola ingresar a la carpeta del repositorio.
3. Ejecutar `composer install` para que composer descargue todas las carpetas y paquetes necesarios para correr Laravel.
4. Revisar que exista archivo `.env`. Si no está copiar el archivo `.env.example` cambiarle el nombre `.env` y eliminar `.env.example`
5. Chequear que tenga valores la posicion `APP_KEY`. Si no está hay que crearla con el comando `php artisan key:generate`
6. Revisar la información de conexión a la db. Son las posicones `DB_ ` del archivo `.env`.
7. Tener Creada una base de datos llamada `darkcode` desde MySQL.
8. Correr las migraciones: `php artisan migrate`.
9. Crear las carpetas `products` y `profiles` en storage/app/public/
10. Correr el seeder: `php artisan db:seed`.
11. Ejecutar `php artisan serve` para iniciar el servidor web.


## Pasos para agregar tags a un producto.
La relacion es de `muchos a muchos` por lo tanto vamos a necesitar 2 tablas más: `tags` y la tabla pivot que relaciones `product_tag`. El nombre de la tabla pivot debe escribirse con los nombres de las tablas en `singular` y en orden alfabético.
1. Crear la tabla `tags` usando migraciones.
2. Crear la tabla pivot `product_tag` respetando el std Laravel.
3. Crear el modelo `Tag`.
4. Definir la relación `muchos a muchos` en los modelos `Tag` y `Product`.
5. Crear las `factory` para tags.
6. Refactorizar el seeder para que actulice la tabla pivot con datos de las tablas `products` y `tags`.

## Chekeando permisos.
1. Franco : Funcionan mis permisos.


<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
:)
