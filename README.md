<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca de este proyecto

Proyecto desarrollado para la materia de Ingeniería de software, Universidad Tecnologica de Pereira Semestre I 2020.

Este proyecto es un aplicativo web que tiene por objetivo proveer un servicio de parqueadero. Hemos implementado el framework de Laravel. 

## Prerequisitos

Para poder poner en marcha este proyecto es necesario previamente contar con los siguientes elementos : 

- Php7.x 
- Composer ( [Sitio Web Oficial](https://getcomposer.org/))
- Motor de base de datos: **MariaDB** o **MySQL**
- Editor, recomendacion VSCode
- terminal o shell 

Para el desarrollo, se utilizo sistema operativo Debian version 10, Base de datos MySQL. todo el proyecto 
se desarrolló gracias a la [documentacion oficial](https://laravel.com/docs) y a los súper tutoriales de [Laracasts](https://laracasts.com/series/laravel-6-from-scratch/episodes/1)

## Puesta en Marcha
1. Clonamos el repo : 
    ```sh
    $ git clone https://github.com/IngenierieriaSoftware2/Parqueadero.git 
    ```
2. Ingresamos a la carpeta y realizamos la instalacion de las dependencias con composer
    ```sh
    $ cd Parqueadero 
    Parqueadero$ composer install
    ```
3. Una vez tenemos las dependencias de Laravel instaladas, es necesario configurar nuestro archivo de entorno .env 
    ```sh
    Parqueadero$ cp .env.example .env
    ```
4. Creamos nuestra base de datos y corremos la migraciones y cambios en la base de datos  
    ```sh
    Parqueadero$ php artisan migrate
    ```
    Obtendras una salida como la siguiente : 
    ```sh
    Migration table created successfully.
    Migrating: 2014_10_12_000000_create_users_table
    Migrated:  2014_10_12_000000_create_users_table (0.25 seconds)
    Migrating: 2014_10_12_100000_create_password_resets_table
    Migrated:  2014_10_12_100000_create_password_resets_table (0.21 seconds)
    Migrating: 2019_08_19_000000_create_failed_jobs_table
    Migrated:  2019_08_19_000000_create_failed_jobs_table (0.1 seconds)
    Migrating: 2020_05_27_022818_create_zonas_table
    Migrated:  2020_05_27_022818_create_zonas_table (0.13 seconds)
    Migrating: 2020_05_27_022852_create_clientes_table
    Migrated:  2020_05_27_022852_create_clientes_table (0.19 seconds)
    Seeding: ZonaSeeder
    Seeded:  ZonaSeeder (7.84 seconds)
    Database seeding completed successfully.

    ```
5. Ejecutamos y ponemos a correr nuestro servidor localmente
    ```sh
    Parqueadero$ php artisan serve 
    Laravel development server started: http://127.0.0.1:8000
    [Thu Apr 30 23:33:17 2020] PHP 7.4.5 Development Server (http://127.0.0.1:8000) started
    ```
## Rutas

| Method   | URI      | Name | Action  | Middleware   |
|---|---|---|---|---|
| GET|HEAD | /        |   Closure | web          |
| GET|HEAD | /api/user |  Closure | api,auth:api |
| GET|HEAD | home      |  home | web          |
| PUT|HEAD | home/{idZona}        |  home.update  | web          |



## Contribuciones

Para realizar aportes o contribuciones se implementa el [modelo](https://tighten.co/blog/adding-commits-to-a-pull-request/) de pull request.Todos los aportes son bienvenidos de personas ajenas a los miembros de equipo


## Licencia

Proyecto de software licenciado bajo licencia [MIT](https://opensource.org/licenses/MIT).
