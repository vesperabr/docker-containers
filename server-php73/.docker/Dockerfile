FROM php:7.3-apache

# Update apt-get
RUN apt-get update

# Install packages
RUN apt-get install -y vim zip curl libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev build-essential libssl-dev libxml2-dev git python

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mysqli gd zip bcmath soap

RUN docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr --with-png-dir=/usr \
    && docker-php-ext-install -j$(nproc) gd

# Clear packages cache
RUN rm -rf /var/lib/apt/lists/*

# Allow rewrite
RUN a2enmod rewrite

# Copy custom PHP.ini
COPY .docker/php.ini $PHP_INI_DIR/conf.d/

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH="${PATH}:/root/.composer/vendor/bin"
RUN composer global require hirak/prestissimo --prefer-dist --no-suggest --classmap-authoritative \
    && composer global require laravel/installer --prefer-dist --no-suggest --classmap-authoritative \
    && composer clear-cache

# Replace shell with bash so we can source files
RUN rm /bin/sh && ln -s /bin/bash /bin/sh

# Install NVM
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.1/install.sh | bash

# Install Node
RUN source ~/.nvm/nvm.sh; \
    nvm install node