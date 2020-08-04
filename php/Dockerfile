FROM php:7.3-fpm

RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

RUN apt-get update \
  && apt-get install -y gnupg 

RUN curl -sL https://deb.nodesource.com/setup_11.x | bash -


RUN apt-get install -y \
nodejs \
git \
zip \
unzip \
vim

RUN npm install npm@latest -g

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql

WORKDIR /var/www/html
