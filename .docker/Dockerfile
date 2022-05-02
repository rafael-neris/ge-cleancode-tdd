FROM php:8.0.0-apache

# Install system dependencies
RUN apt-get update && \
     apt-get install -y \
         libzip-dev \
         && docker-php-ext-install zip
# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

RUN pecl install xdebug-3.0.0 \
 && docker-php-ext-enable xdebug

# Get latest Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN echo xdebug.mode=coverage > /usr/local/etc/php/conf.d/xdebug.ini
# Set working directory
WORKDIR /var/www