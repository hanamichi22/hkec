FROM php:8.0-fpm-alpine AS builder
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

FROM nginx:stable-alpine
RUN apk --no-cache add ca-certificates
WORKDIR /var/www/html
COPY --from=builder /var/www/html/hkec ./
CMD ["./hkec"]  