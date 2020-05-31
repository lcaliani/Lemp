FROM wyveo/nginx-php-fpm:php74

RUN apt-get update

# VIM
RUN apt-get install -y vim

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php  -- --install-dir=/bin && \
    cp /bin/composer.phar /bin/composer

# NODE & YARN
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs 
