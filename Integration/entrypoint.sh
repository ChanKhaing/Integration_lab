#!/bin/bash
set -e

echo "🚀 Starting Laravel Application..."

# Clear Cache
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Run Migrations
php artisan migrate --force

# Start PHP-FPM
#!/bin/bash
set -e

echo "🚀 Starting Laravel Application on Port 8000..."

# Clear Cache
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Run Migrations
php artisan migrate --force

# Start Laravel Server
php artisan serve --host=0.0.0.0 --port=8000
