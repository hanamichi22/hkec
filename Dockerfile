FROM php:8.0-fpm-alpine
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
EXPOSE 8000

FROM nginx:stable-alpine
RUN ./:/var/www/html
RUN ./docker/nginx/site.conf:/etc/nginx/conf.d/default.conf:rw
RUN ./docker/logs/nginx:/var/logs/nginx:rw

FROM postgres:12.3-alpine
RUN ./docker/postgres:/var/lib/postgresql/data