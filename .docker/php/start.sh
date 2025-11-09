chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Install composer deps if vendor empty
if [ ! -d "vendor" ]; then
    composer install --no-interaction
fi

php-fpm