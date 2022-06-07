# base image app
FROM php:8.0-fpm-alpine AS builder

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -ex \
    	&& apk --no-cache add postgresql-dev nodejs yarn npm\
    	&& docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install

RUN yarn install

COPY .env.example .env

RUN php artisan key:generate

RUN php artisan storage:link

RUN chmod -R 777 storage

# build a small image
FROM nginx:stable-alpine

WORKDIR /var/www/html

COPY --from=builder /var/www/html /var