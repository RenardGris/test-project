FROM php:8.2-apache

# copy the Composer PHAR from the Composer image into the PHP image
COPY --from=composer /usr/bin/composer /usr/bin/composer

# PHP
RUN apt-get update && apt-get update
RUN apt-get install -y zlib1g-dev libwebp-dev libpng-dev && docker-php-ext-install gd
RUN apt-get install libzip-dev -y && docker-php-ext-install zip

# Apache
RUN a2enmod rewrite
RUN service apache2 restart

# Code
COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install

EXPOSE 80
