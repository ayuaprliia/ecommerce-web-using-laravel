# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy composer files for dependency resolution
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-scripts --no-autoloader --no-progress --no-suggest --no-interaction \
    && rm -rf /var/lib/apt/lists/* \
    && a2enmod rewrite \
    && service apache2 restart

# Copy the rest of the application code
COPY . .

# Generate optimized autoload files and clear the cache
RUN composer dump-autoload --optimize --no-scripts

# Expose the port
EXPOSE 80

# Command to run the application
CMD ["apache2-foreground"]
