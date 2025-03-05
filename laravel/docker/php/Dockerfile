FROM php:8.4-fpm

WORKDIR /var/www/html

RUN apt-get update
RUN apt-get install -y \
    zip \
    unzip \
    libzip-dev

RUN docker-php-ext-install \
    zip \
    pdo \
    pdo_mysql

# composerのインストール
COPY --from=composer:2.8.6 /usr/bin/composer /usr/bin/composer
