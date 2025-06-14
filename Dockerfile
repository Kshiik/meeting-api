FROM php:8.2-apache

# Установка нужных расширений
RUN apt-get update && apt-get install -y \
    git unzip zip libicu-dev libonig-dev libzip-dev libxml2-dev libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache

# Установка Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Копируем проект
COPY . /var/www/html

# Работаем из каталога проекта
WORKDIR /var/www/html

# Устанавливаем зависимости
RUN composer install --no-dev --optimize-autoloader

# Настройки Apache
RUN a2enmod rewrite
