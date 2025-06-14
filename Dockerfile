FROM php:8.2-apache

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    git unzip zip libicu-dev libonig-dev libzip-dev libxml2-dev libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache

# Установка Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Копируем только composer.json и lock для установки зависимостей
COPY composer.json composer.lock /var/www/html/

WORKDIR /var/www/html

# Устанавливаем зависимости
RUN composer install --no-dev --optimize-autoloader

# Теперь копируем оставшиеся файлы проекта (src/, public/, config/ и т.д.)
COPY . /var/www/html

# Настройка Apache
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf && \
    a2enmod rewrite
