# Práctica - Relaciones en Laravel

## Descripción
Proyecto para comprender y trabajar con relaciones en Laravel. Este proyecto incluye la configuración de migraciones, seeders, y endpoints para interactuar con la base de datos.

---

## Requisitos Tecnológicos
Antes de comenzar, asegúrate de tener instalados los siguientes componentes:

- **PHP**: Versión compatible con Laravel.
- **Composer**: Para la gestión de dependencias.
- **MariaDB/MySQL**: Base de datos para el proyecto.
- **Docker**: Para la creación y gestión del contenedor de MariaDB.

---

## Pasos para Preparar el Proyecto

### 1. Clonar el Repositorio
Clona el repositorio en tu máquina local utilizando el siguiente comando:

```bash
git clone https://github.com/DarKPenetrator/ud3.3
```
```bash
cd /ud3_ejercicios/ud3-laravel/laravel/
```




### 2. Instalar las Dependencias
Ejecuta el siguiente comando en el directorio raíz del proyecto para instalar las dependencias:

```bash
composer install
```


### 3. Configurar el Archivo `.env`
Copia el archivo `.env.example` y renómbralo como `.env`:

```bash
cp .env.example .env
```


Luego, abre el archivo `.env` y ajusta las configuraciones de la base de datos según tu entorno:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestion_notas
DB_USERNAME=root
DB_PASSWORD=tu_contraseña
```
Puedes cambiar `tu_contraseña` por otra contraseña.


### 4. Levantar el Contenedor de MariaDB
Para levantar el contenedor de MariaDB, ejecuta el siguiente comando:

```bash
docker run --name mariadb-server -d -p 3306:3306 mariadb-server
```


### 5. Acceder a la Base de Datos MariaDB
Una vez que el contenedor esté en funcionamiento, puedes acceder a la base de datos MariaDB con el siguiente comando:

```bash
docker exec -it mariadb-server mariadb -u root -p
```
Deberas introducir tu contraseña o sino la creaste por defecto poner `tu_contraseña`

### 6. Ejecutar Migraciones y Seeders
Para preparar la base de datos, ejecuta los siguientes comandos:

```bash
php artisan migrate
```
```bash
php artisan db:seed
```



### 7. Levantar el Servidor de Desarrollo
Inicia el servidor de desarrollo de Laravel con:

```bash
php artisan serve
```


### 8. Probar la API con Postman
Importa el archivo `postman_collection.json` incluido en el repositorio en Postman para probar los endpoints del proyecto.

---

## Notas Adicionales
> [!NOTE]  
> - Verifica que las credenciales configuradas en el archivo `.env` sean correctas para evitar errores de conexión.
> - Asegúrate de que el servicio de la base de datos esté corriendo antes de ejecutar las migraciones.


---
