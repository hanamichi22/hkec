FROM php:8.0-fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -ex \
    	&& apk --no-cache add postgresql-dev nodejs yarn npm\
    	&& docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html

COPY . /var/www/html

# Copy nginx configs
# RUN cp docker/nginx/site.conf /etc/nginx/conf.d/default.conf

RUN composer install

RUN yarn install

COPY .env.example .env

RUN php artisan key:generate