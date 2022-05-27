FROM nginx:stable-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -ex \
    	&& apk --no-cache add postgresql-dev nodejs yarn npm\
    	&& docker-php-ext-install pdo pdo_pgsql

WORKDIR /usr/share/nginx/html

COPY . /usr/share/nginx/html

RUN chown -R www-data:www-data /usr/share/nginx/html

RUN composer install

RUN yarn install

COPY .env.example .env

RUN php artisan key:generate