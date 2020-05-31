FROM php:7.4-fpm

# PHP EXTENSIONS
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install bcmath
RUN apt-get update && apt-get install libonig-dev
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install json
RUN curl -sS https://getcomposer.org/installer | php  -- --install-dir=/bin && \
    cp /bin/composer.phar /bin/composer
 
