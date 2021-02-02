FROM php:8-fpm-alpine
# RUN apk add --no-cache libpng-dev libjpeg-turbo-dev freetype-dev && \
#     docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include && \
#     docker-php-ext-install pdo pdo_mysql bcmath gd zip
RUN apk add --no-cache libpng-dev libzip-dev libjpeg-turbo-dev freetype-dev && \
    docker-php-ext-configure gd && \
    docker-php-ext-install pdo pdo_mysql bcmath gd zip
WORKDIR /var/www
COPY ./src /var/www
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN composer global require hirak/prestissimo

#RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-webp-dir=/usr/include/  --with-jpeg-dir=/usr/include/
#RUN docker-php-ext-install gd pdo pdo_mysql bcmath exif
RUN chmod 777 -R /var/www/storage /var/www/bootstrap/cache