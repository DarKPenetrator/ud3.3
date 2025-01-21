# Práctica - Relaciones en Laravel

### Requisitos Tecnológicos

Para trabajar en este proyecto, necesitas tener instalados:
- **PHP**
- **Composer**
- **MariaDB** (o cualquier sistema compatible con MySQL).

### Pasos para Preparar el Proyecto

1. **Clonar el Repositorio**


    ```bash
    git clone <URL_DEL_REPOSITORIO>
    ```
    
    ```bash
    cd /ud3_ejercicios/ud3-laravel/laravel/
    ```


Ejecuta el siguiente comando para instalar las dependencias del proyecto:

    ```bash
    git clone <URL_DEL_REPOSITORIO>
    ```

    
Configurar el Archivo .env

Copia el archivo .env.example y renómbralo como .env:

    ```bash
    git clone <URL_DEL_REPOSITORIO>
    ```
cp .env.example .env
Luego, ajusta las configuraciones de la base de datos en el archivo .env:
# PASO 1: Clonar el Repositorio
git clone <URL_DEL_REPOSITORIO>
cd <NOMBRE_DEL_REPOSITORIO>

## PASO 2: Instalar las Dependencias
composer install

## PASO 3: Configurar el Archivo .env
cp .env.example .env

### Nota:
# Abre el archivo .env y configura las variables de conexión a la base de datos:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=gestion_notas
# DB_USERNAME=root
# DB_PASSWORD=tu_contraseña

## PASO 4: Ejecutar Migraciones y Seeders
php artisan migrate
php artisan db:seed

## PASO 5: Levantar el Servidor de Desarrollo
php artisan serve

## PASO 6: Probar la API con Postman
### Nota:
# El repositorio incluye un archivo llamado `postman_collection.json`.
# Importe este archivo en Postman para ejecutar las pruebas de los endpoints.
