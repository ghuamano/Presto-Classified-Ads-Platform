Presto - Classified Ads Platform
Description
Presto is a robust web platform for classified ads developed with Laravel, allowing users to create, manage, and explore product listings. This application facilitates buying and selling between individuals through an intuitive and accessible interface, incorporating advanced technologies to enhance user experience and security.

Key Features
Ad Management

Creation of listings with multiple images, title, description, and price
Editing and deletion of personal ads
Detailed product view with complete information
Category System

Category navigation to facilitate searches
Ad filtering by category
Category management from the admin panel
Authentication and User Management

Secure registration and login
Customizable user profiles
Differentiated roles: user, reviewer, and administrator
Admin Panel

Content and user management
Platform usage statistics and metrics
Control of ads and categories
Review System

Content moderation before publication
Specific panel for reviewers
Ad approval/rejection process
Search and Filtering

Keyword search
Advanced filters by price, date, and features
Sorting of results according to different criteria
Advanced Features
Google Cloud Vision API Integration

Automatic image analysis to detect inappropriate content
Automatic image tagging to improve search
Text detection in images to verify information
Security analysis to prevent adult, violent, or inappropriate content
Image Processing

Automatic resizing and optimization
Thumbnail generation to improve performance
Compression without significant quality loss
Translation System

Multilingual support with dynamic translations
Interface adapted to various languages
SEO Optimization

Search engine friendly URLs
Optimized metadata for each ad
Dynamic sitemap for efficient indexing
Notifications

Email alert system
Real-time notifications on the platform
Responsive Interface

Design adaptable to mobile devices, tablets, and desktop
Optimized user experience for different screen sizes
Technologies Used
Backend: Laravel 12.x, PHP 8.2+
Database: MySQL
Frontend: Blade, Bootstrap 5, JavaScript, jQuery, Livewire 3.6
APIs and Cloud Services:
Google Cloud Vision API for image analysis
Laravel Scout for optimized searches
TNTSearch driver for full-text search functionality
Authentication: Laravel Fortify
Image Processing: Spatie Image
Storage: Local file system with optimization
Dependencies: Composer, NPM
Internationalization: Blade Flags for language selection
Architecture
The project follows an MVC (Model-View-Controller) architecture according to Laravel standard practices:

Models: Represent the main entities (User, Announcement, Category, etc.)
Controllers: Manage business logic and data flow
Views: Blade templates for user interface rendering
Middlewares: Role and permission-based access control
Jobs: Asynchronous processing for intensive tasks like image analysis
Events and Listeners: For reactive functionalities such as notifications
Installation

````
# Clone the repository
git clone https://github.com/yourusername/presto.git
cd presto

# Install dependencies
composer install
npm install

# Configure the environment
cp .env.example .env
php artisan key:generate

# Configure the database in .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=presto
# DB_USERNAME=root
# DB_PASSWORD=

# Configure Google Cloud Vision API
# GOOGLE_CLOUD_KEY_FILE=your-key-file.json
# GOOGLE_CLOUD_PROJECT_ID=your-project-id

# Run migrations and seeders
php artisan migrate --seed

# Compile assets
npm run dev

# Start the server
php artisan serve
```
Google Cloud Vision API Configuration
To use the image analysis functionality:

Create a service account in Google Cloud Platform
Download the JSON credentials file
Place the file in the appropriate location according to the .env configuration
Activate Google Cloud Vision API in the GCP console
Development Team
This project was developed by Celona, Coduti, Huaman, and Piergentili as a final project for WA Academy.

License
MIT
