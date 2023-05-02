FROM php:8.1.19RC1-apache
USER root
RUN docker-php-ext-install mysqli
COPY ./src/index.php /var/www/html
EXPOSE 80