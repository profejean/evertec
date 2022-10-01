Test Evertec

La presente es para explicar el proceso de la app

Proyecto creado en Laravel 9 con sail para docker

1)composer install

2)cp .env.example .env

3)php artisan key:generate

4.  DB_CONNECTION=mysql
    DB_HOST=mariadb
    DB_PORT=3306
    DB_DATABASE=evertec
    DB_USERNAME=sail
    DB_PASSWORD=password

6)php artisan migrate:fresh --seed

5)Ruta raiz dirige a welcome

6)Los usuarios que se registran siempre tienen el ron de clientes.

7)El usuario:

client@evertec.com
password

9)Deje modulo de sail instalado por si quieren iniciar el docker.

    a)composer require laravel/sail --dev
    b)php artisan sail:install
    c)Elije la base de datos de tu gusto (Tardara en descargar las imagenes si no las tienes instaladas en docker)
    d)./vendor/bin/sail up
    e)./vendor/bin/sail artisan sail:publish
    f)./vendor/bin/sail artisan migrate:fresh --seed

10. El git posee varias ramas una por cada modulo, simulando trabajo en equipo.

11. sail artisan test para correr todos los test.
