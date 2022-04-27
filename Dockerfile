FROM php:8.0-fpm-alpine
FROM postgres:12.3-alpine
FROM nginx:stable-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -ex \
    	&& apk --no-cache add postgresql-dev nodejs yarn npm\
    	&& docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html

COPY . /var/www/html

COPY --chown=www-data:www-data . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

RUN composer install

RUN yarn install

EXPOSE 8080