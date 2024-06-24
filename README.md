# Encuestas Bonafont

## Instrucciones

* Crear una copia de `.env.example` y renombrarlo como `.env`
* Configurar los datos de conexión a la base de datos en `.env`
* Instalar las dependencias del sistema

    `composer install`

* Generar las llaves criptográficas para la aplicación

    `php artisan key:generate`

* Crear enlace simbolico para la carpeta storage

    `php artisan storage:link`

* Ejecutar las migraciones de la base de datos (creación de tablas y generación de registros)

    `php artisa migrate:fresh --seed`