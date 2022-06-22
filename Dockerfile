FROM richarvey/nginx-php-fpm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -ex \
    	&& apk --no-cache add postgresql-dev nodejs yarn npm\
    	&& docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public

# Copy nginx configs
RUN cp docker/nginx/site.conf /etc/nginx/conf.d/default.conf
RUN cp docker/logs/nginx /var/logs/nginx
RUN cp docker/postgres /var/lib/postgresql/data

RUN composer install

RUN yarn install

COPY .env.example .env

RUN php artisan key:generate

EXPOSE 8000:80