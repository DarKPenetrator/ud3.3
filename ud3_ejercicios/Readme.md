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
   cd <NOMBRE_DEL_REPOSITORIO>
    ```

Instalar las Dependencias

Ejecuta el siguiente comando para instalar las dependencias del proyecto:

composer install

Configurar el Archivo .env

Copia el archivo .env.example y renómbralo como .env:

cp .env.example .env

Luego, ajusta las configuraciones de la base de datos en el archivo .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestion_notas
DB_USERNAME=root
DB_PASSWORD=tu_contraseña

Ejecutar Migraciones y Seeders

Crea las tablas en la base de datos y llena los datos de prueba:

php artisan migrate
php artisan db:seed

Levantar el Servidor de Desarrollo

Inicia el servidor de Laravel:

php artisan serve

La aplicación estará disponible en http://localhost:8000.

Probar la API con Postman

En el repositorio se incluye un archivo JSON llamado postman_collection.json, que contiene todos los endpoints necesarios para probar las relaciones y funcionalidades. Importe este archivo en Postman y prueba los endpoints de manera sencilla.

Endpoints Disponibles

Asociar Alumno y Asignatura: POST /api/alumno-asignatura/attach

Desasociar Alumno y Asignatura: POST /api/alumno-asignatura/detach

Obtener Asignaturas de un Alumno: GET /api/alumno/{id}/asignaturas

Obtener Posts de un Alumno: GET /api/alumno/{id}/posts

Obtener Perfil de un Alumno: GET /api/alumno/{id}/perfil

Autor

[Tu Nombre][Fecha]