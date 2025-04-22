# Presto - Plataforma de Anuncios Clasificados

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-F28D1A?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-4E56A6?style=for-the-badge&logoColor=white)
![Google Cloud](https://img.shields.io/badge/Google%20Cloud-4285F4?style=for-the-badge&logo=google-cloud&logoColor=white)
![Laravel Scout](https://img.shields.io/badge/Laravel%20Scout-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TNTSearch](https://img.shields.io/badge/TNTSearch-FF5722?style=for-the-badge&logoColor=white)
![Laravel Fortify](https://img.shields.io/badge/Laravel%20Fortify-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Spatie](https://img.shields.io/badge/Spatie-4E56A6?style=for-the-badge&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![NPM](https://img.shields.io/badge/NPM-CB3837?style=for-the-badge&logo=npm&logoColor=white)


# Descripción
Presto es una robusta plataforma web para anuncios clasificados desarrollada con Laravel, que permite a los usuarios crear, gestionar y explorar listados de productos. Esta aplicación facilita la compra y venta entre particulares a través de una interfaz intuitiva y accesible, incorporando tecnologías avanzadas para mejorar la experiencia de usuario y la seguridad.

## Características Principales

Gestión de Anuncios

Creación de listados con múltiples imágenes, título, descripción y precio
Edición y eliminación de anuncios personales
Vista detallada del producto con información completa

## Sistema de Categorías

Navegación por categorías para facilitar búsquedas
Filtrado de anuncios por categoría
Gestión de categorías desde el panel de administración
Autenticación y Gestión de Usuarios

## Registro y login seguros

Perfiles de usuario personalizables
Roles diferenciados: usuario, revisor y administrador

## Panel de Administración

Gestión de contenido y usuarios
Estadísticas y métricas de uso de la plataforma
Control de anuncios y categorías
Sistema de Revisión

## Moderación de contenido antes de la publicación

Panel específico para revisores
Proceso de aprobación/rechazo de anuncios
Búsqueda y Filtrado

## Búsqueda por palabras clave

Filtros avanzados por precio, fecha y características
Ordenación de resultados según diferentes criterios
Características Avanzadas
Integración con Google Cloud Vision API

## Análisis automático de imágenes para detectar contenido inapropiado

Etiquetado automático de imágenes para mejorar búsquedas
Detección de texto en imágenes para verificar información
Análisis de seguridad para prevenir contenido adulto, violento o inapropiado
Procesamiento de Imágenes

## Redimensionamiento y optimización automáticos

Generación de miniaturas para mejorar rendimiento
Compresión sin pérdida significativa de calidad
Sistema de Traducción

## Soporte multilingüe con traducciones dinámicas

Interfaz adaptada a varios idiomas
Optimización SEO

## URLs amigables para motores de búsqueda

Metadatos optimizados para cada anuncio
Sitemap dinámico para indexación eficiente
Notificaciones

## Sistema de alertas por email

Notificaciones en tiempo real en la plataforma
Interfaz Responsiva

## Diseño adaptable a dispositivos móviles, tablets y escritorio

Experiencia de usuario optimizada para diferentes tamaños de pantalla

## Tecnologías Utilizadas

### Backend
- ⚙️ **Laravel** 12.x
- 🐘 **PHP** 8.2+

### Base de Datos
- 🛢️ **MySQL**

### Frontend
- 🎨 **Blade**
- 🌐 **Bootstrap 5**
- 📜 **JavaScript**
- 💎 **jQuery**
- 🟪 **Livewire 3.6**

## APIs y Servicios en la Nube:
- ☁️ **Google Cloud Vision API**
- 🔍 **Laravel Scout**
- 🔧 **TNTSearch**
- 🔒 **Laravel Fortify**
- 🖼️ **Spatie Image**
- 📦 **Composer**, **NPM**

## Arquitectura

El proyecto sigue una arquitectura MVC (Modelo-Vista-Controlador) según las prácticas estándar de Laravel:

## Modelos: 

Representan las entidades principales (Usuario, Anuncio, Categoría, etc.)
Controladores: Gestionan la lógica de negocio y el flujo de datos

## Vistas: 
Plantillas Blade para la renderización de la interfaz de usuario

## Middlewares: 
Control de acceso basado en roles y permisos

## Jobs: 
Procesamiento asíncrono para tareas intensivas como análisis de imágenes
Eventos y Listeners: Para funcionalidades reactivas como notificaciones

## Instalación


## Clonar el repositorio
```sh
git clone https://github.com/yourusername/presto.git
cd presto
```

## Instalar dependencias
```sh
composer install
npm install
```

## Configurar el entorno
```sh
cp .env.example .env
php artisan key:generate
```

## Configurar la base de datos en .env
```sh
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=presto
# DB_USERNAME=root
# DB_PASSWORD=
```

## Configurar Google Cloud Vision API
```sh
# GOOGLE_CLOUD_KEY_FILE=your-key-file.json
# GOOGLE_CLOUD_PROJECT_ID=your-project-id
```

## Ejecutar migraciones y seeders
```sh
php artisan migrate --seed
```


## Compilar assets
```sh
npm run dev
```


## Iniciar el servidor
```sh
php artisan serve
```

## Configuración de Google Cloud Vision API
Para usar la funcionalidad de análisis de imágenes:

Crear una cuenta de servicio en Google Cloud Platform
Descargar el archivo de credenciales JSON
Colocar el archivo en la ubicación adecuada según la configuración del .env
Activar Google Cloud Vision API en la consola GCP

## Equipo de Desarrollo
Este proyecto fue desarrollado por Aurora Piergentili, Alessandro Celona, Luca Coduti y Guillermo Huaman como proyecto final para Aulab Academy.

## Licencia
MIT
