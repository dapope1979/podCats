FROM php:7.1.8-apache

MAINTAINER pope

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install mbstring pdo pdo_mysql 
RUN chown -R www-data:www-data /srv/app && a2enmod rewrite
RUN service apache2 restart