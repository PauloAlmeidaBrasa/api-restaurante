
FROM php:8.1-fpm


# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

WORKDIR /var/www/html

COPY . .


RUN chmod -R 775 storage bootstrap/cache
RUN chown -R www-data:www-data /var/www/html

CMD php artisan serve --host=0.0.0.0 --port=8000



# Use an official PHP runtime as a parent image
# FROM php:8.1-fpm

# # Set the working directory in the container
# WORKDIR /var/www/html

# # Install dependencies
# RUN apt-get update && apt-get install -y \
#     git \
#     unzip \
#     libzip-dev \
#     && docker-php-ext-install pdo pdo_mysql zip

# # Install Composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Copy composer.json and composer.lock
# COPY composer.json composer.lock ./

# # Install PHP dependencies
# RUN composer install --no-scripts --no-autoloader 

# # Copy the rest of the application code
# COPY . .

# # Generate autoload files and cache
# RUN composer dump-autoload --optimize

# # Expose port 9000 and start PHP-FPM server
# EXPOSE 9000
# CMD ["php-fpm"]