FROM php:8.3-fpm

# Install packages & PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libpng-dev libonig-dev libxml2-dev libzip-dev \
    libicu-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy only composer files first (cache layer)
COPY composer.json composer.lock ./

# Install vendor
RUN composer install --no-scripts --no-autoloader

# Copy project files
COPY . .

# Generate autoload (faster build)
RUN composer dump-autoload

# Set permissions (may be overridden by bind mount)
RUN chown -R www-data:www-data storage bootstrap/cache 

EXPOSE 9000

# Copy start script & run it
COPY .docker/php/start.sh /usr/local/bin/start
RUN chmod +x /usr/local/bin/start
CMD ["start"]
