FROM php:8.1-apache

WORKDIR /var/www/html/

RUN a2enmod rewrite

COPY . .
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

EXPOSE 80
