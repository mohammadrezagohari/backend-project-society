FROM php:8.1.6
WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql
