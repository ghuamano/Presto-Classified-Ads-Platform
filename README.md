# Presto - Classified Ads Platform

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


# Description
Presto is a robust web platform for classified ads developed with Laravel, allowing users to create, manage, and explore product listings. This application facilitates buying and selling between individuals through an intuitive and accessible interface, incorporating advanced technologies to enhance user experience and security.

## Key Features

Ad Management

Creation of listings with multiple images, title, description, and price
Editing and deletion of personal ads
Detailed product view with complete information

## Category System

Category navigation to facilitate searches
Ad filtering by category
Category management from the admin panel
Authentication and User Management

## Secure registration and login

Customizable user profiles
Differentiated roles: user, reviewer, and administrator

## Admin Panel

Content and user management
Platform usage statistics and metrics
Control of ads and categories
Review System

## Content moderation before publication

Specific panel for reviewers
Ad approval/rejection process
Search and Filtering

## Keyword search

Advanced filters by price, date, and features
Sorting of results according to different criteria
Advanced Features
Google Cloud Vision API Integration

## Automatic image analysis to detect inappropriate content

Automatic image tagging to improve search
Text detection in images to verify information
Security analysis to prevent adult, violent, or inappropriate content
Image Processing

## Automatic resizing and optimization

Thumbnail generation to improve performance
Compression without significant quality loss
Translation System

## Multilingual support with dynamic translations

Interface adapted to various languages
SEO Optimization

## Search engine friendly URLs

Optimized metadata for each ad
Dynamic sitemap for efficient indexing
Notifications

## Email alert system

Real-time notifications on the platform
Responsive Interface

## Design adaptable to mobile devices, tablets, and desktop

Optimized user experience for different screen sizes

## Technologies Used

### Backend
- ⚙️ **Laravel** 12.x
- 🐘 **PHP** 8.2+

### Database
- 🛢️ **MySQL**

### Frontend
- 🎨 **Blade**
- 🌐 **Bootstrap 5**
- 📜 **JavaScript**
- 💎 **jQuery**
- 🟪 **Livewire 3.6**

## APIs and Cloud Services:
- ☁️ **Google Cloud Vision API**
- 🔍 **Laravel Scout**
- 🔧 **TNTSearch**
- 🔒 **Laravel Fortify**
- 🖼️ **Spatie Image**
- 📦 **Composer**, **NPM**

## Architecture

The project follows an MVC (Model-View-Controller) architecture according to Laravel standard practices:

## Models: 

Represent the main entities (User, Announcement, Category, etc.)
Controllers: Manage business logic and data flow

## Views: 
Blade templates for user interface rendering

## Middlewares: 
Role and permission-based access control

## Jobs: 
Asynchronous processing for intensive tasks like image analysis
Events and Listeners: For reactive functionalities such as notifications

## Installation


## Clone the repository
```sh
git clone https://github.com/yourusername/presto.git
cd presto
```

## Install dependencies
```sh
composer install
npm install
```

## Configure the environment
```sh
cp .env.example .env
php artisan key:generate
```

## Configure the database in .env
```sh
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=presto
# DB_USERNAME=root
# DB_PASSWORD=
```

## Configure Google Cloud Vision API
```sh
# GOOGLE_CLOUD_KEY_FILE=your-key-file.json
# GOOGLE_CLOUD_PROJECT_ID=your-project-id
```

## Run migrations and seeders
```sh
php artisan migrate --seed
```


## Compile assets
```sh
npm run dev
```


## Start the server
```sh
php artisan serve
```

## Google Cloud Vision API Configuration
To use the image analysis functionality:

Create a service account in Google Cloud Platform
Download the JSON credentials file
Place the file in the appropriate location according to the .env configuration
Activate Google Cloud Vision API in the GCP console

## Development Team
This project was developed by Aurora Piergentili, Alessandro Celona,Luca Coduti and Guillermo Huaman as a final project for Aulab Academy.

## License
MIT
