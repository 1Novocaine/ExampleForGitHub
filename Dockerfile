FROM php:7.4.1-apache


RUN apt-get update && \
    apt-get install libpq-dev -y &&\
    docker-php-ext-install pdo_pgsql

COPY .docker/php/php.ini /usr/local/etc/php
COPY . /var/www/html/app
COPY .docker/apache/vhosts.conf /etc/apache2/sites-enabled/000-default.conf



