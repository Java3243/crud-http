# CRUD de Productos – Peticiones HTTP en Laravel 12

## Descripción

Este proyecto consiste en el desarrollo de una aplicación web para administrar productos mediante las operaciones CRUD (Crear, Leer, Actualizar y Eliminar).

La práctica tiene como propósito comprender el funcionamiento de las peticiones HTTP en Laravel 12, utilizando Blade para la construcción de vistas y Bootstrap 5 para el diseño de la interfaz.

Los productos se almacenan temporalmente mediante sesiones de Laravel, por lo que no se requiere una conexión a una base de datos.

## Objetivo

Implementar los métodos HTTP GET, POST, PUT y DELETE mediante rutas y controladores de Laravel, incorporando formularios, validaciones y componentes de Bootstrap 5.

## Tecnologías utilizadas

- PHP 8.5
- Laravel 12
- Bootstrap 5
- Bootstrap Icons
- Blade
- JavaScript
- Sass
- Vite
- Composer
- Node.js y npm

## Funcionalidades

### 1. Consultar productos (GET)
- Visualización de productos en una tabla.
- Búsqueda de productos por nombre.
- Filtrado por categoría.
- Combinación de filtros.

### 2. Registrar productos (POST)
- Formulario para agregar productos.
- Validación de campos obligatorios.
- Validación del nombre y precio.
- Protección CSRF mediante `@csrf`.
- Mensajes de error mediante Bootstrap.

### 3. Actualizar productos (PUT)
- Formulario de edición con datos existentes.
- Validación de información.
- Actualización de registros conservando su identificador.
- Uso de `@method('PUT')`.

### 4. Eliminar productos (DELETE)
- Botón de eliminación para cada producto.
- Modal de confirmación con Bootstrap.
- Identificación del producto seleccionado.
- Uso de `@method('DELETE')`.

### 5. Interfaz
- Diseño responsivo.
- Barra de navegación.
- Tablas y formularios de Bootstrap.
- Alertas de confirmación.
- Iconos de Bootstrap Icons.

## Estructura del proyecto

```text
crud-http/
├── app/
│   └── Http/
│       └── Controllers/
│           └── ProductoController.php
├── resources/
│   ├── js/
│   ├── sass/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── productos/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
├── routes/
│   └── web.php
├── database/
├── public/
├── composer.json
├── package.json
└── README.md
```

## Instalación y ejecución

### Requisitos
- PHP 8.2 o superior.
- Composer.
- Node.js y npm.

### 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
cd crud-http
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Configurar el entorno

Copiar el archivo `.env.example` y crear `.env`.

En Windows:

```bash
copy .env.example .env
```

Generar la clave de la aplicación:

```bash
php artisan key:generate
```

Configurar en `.env`:

```env
SESSION_DRIVER=file
CACHE_STORE=file
```

### 4. Instalar dependencias de JavaScript

```bash
npm install
```

### 5. Ejecutar la aplicación

Abrir dos terminales dentro del proyecto.

Terminal 1:

```bash
php artisan serve
```

Terminal 2:

```bash
npm run dev
```

Abrir en el navegador:

```text
http://127.0.0.1:8000
```

## Almacenamiento de información

Los productos se almacenan temporalmente en las sesiones de Laravel. No se utiliza una base de datos para las operaciones de esta práctica.

## Autor

Práctica individual – Aplicaciones Web.

## Contexto académico

Guía práctica: Peticiones HTTP en Laravel 12 con Bootstrap 5.

**Periodo:** Septiembre–Diciembre 2026.
